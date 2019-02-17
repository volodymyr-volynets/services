<?php

namespace Numbers\Services\Widgets\Dates\Model\Virtual;
class Dates extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $name = null;
	public $pk = [];
	public $tenant = true;
	public $module;
	public $orderby = ['wg_date_inserted_timestamp' => SORT_ASC];
	public $limit;
	public $column_prefix = 'wg_date_'; // must not change it
	public $columns = [];
	public $constraints = [];
	public $indexes = [];
	public $history = false;
	public $audit = false; // must not change it
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = false;

	public $relation; // must not change it
	public $attributes = false; // must not change it
	public $details_pk = ['wg_date_servdatetype_code'];
	public $dates_all_types;

	public $who = [
		'inserted' => true,
		'updated' => true
	];

	/**
	 * Constructor
	 */
	public function __construct($class, $virtual_class_name, $options = []) {
		// add regular columns
		$this->columns['wg_date_tenant_id'] = ['name' => 'Tenant #', 'domain' => 'tenant_id'];
		$this->determineModelMap($class, 'dates', $virtual_class_name, $options);
		$this->columns['wg_date_servdatetype_code'] = ['name' => 'Date Type Code', 'domain' => 'group_code'];
		$this->columns['wg_date_timestamp'] = ['name' => 'Timestamp', 'type' => 'timestamp'];
		$this->pk = array_merge(array_values($this->map), ['wg_date_servdatetype_code']);
		// add constraints
		$this->constraints[$this->name . '_pk'] = [
			'type' => 'pk',
			'columns' => $this->pk
		];
		$this->constraints[$this->name . '_parent_fk'] = [
			'type' => 'fk',
			'columns' => array_values($this->map),
			'foreign_model' => $class,
			'foreign_columns' => array_keys($this->map)
		];
		$this->constraints[$this->name . '_servdatetype_code_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_date_tenant_id', 'wg_date_servdatetype_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\DateTypes',
			'foreign_columns' => ['ss_servdatetype_tenant_id', 'ss_servdatetype_code']
		];
		// construct table
		parent::__construct($options);
	}

	/**
	 * Pre-load model and fields
	 */
	public function preloadModelsAndFields() {
		// preload types
		if (!isset($this->dates_all_types)) {
			$dates_model = \Factory::model('\Numbers\Services\Services\Model\Service\DateTypes', true);
			$this->dates_all_types = $dates_model->get([
				'pk' => ['ss_servdatetype_code']
			]);
		}
	}

	/**
	 * Process widget
	 *
	 * @param object $form
	 * @param array $options
	 */
	public function formProcessWidget(& $form, $options) {
		// create a container
		$new_container_link = ($options['container_link'] ?? '') . '_' . ($options['row_link'] ?? '') . '__container';
		// collection key
		if (!empty($options['details_parent_key'])) {
			$details_collection_key = ['details', $options['details_parent_key'], 'details', $this->virtual_class_name];
			$type = 'subdetails';
		} else {
			$details_collection_key = ['details', $this->virtual_class_name];
			$type = 'details';
		}
		// build a container
		$form->container($new_container_link, [
			'type' => $type,
			'label_name' => $options['label_name'] ?? '',
			'details_rendering_type' => $options['details_rendering_type'] ?? 'table',
			'details_new_rows' => $options['details_new_rows'] ?? 1,
			'details_parent_key' => $options['details_parent_key'] ?? null,
			'details_key' => $this->virtual_class_name,
			'details_pk' => $this->details_pk,
			'pk' => $this->pk,
			'details_collection_key' => $details_collection_key,
			'details_process_widget_data' => method_exists($this, 'formProcessWidgetData'),
			'details_convert_multiple_columns' => method_exists($this, 'convertMultipleColumns'),
			'details_cannot_delete' => true,
			'order' => $options['order'] ?? 35000,
			'required' => $options['required'] ?? false
		]);
		// add elements
		$elements = [
			'row1' => [
				'wg_date_servdatetype_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Date Type', 'domain' => 'group_code', 'null' => true, 'percent' => 40, 'required' => true, 'placeholder' => 'Date Type', 'details_unique_select' => true, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\DateTypes', 'options_params' => ['ss_servdatetype_readonly' => 0], 'onchange' => 'this.form.submit();', 'custom_renderer' => "{$this->virtual_class_name}::overrideFieldName"],
				'wg_date_timestamp' => ['order' => 2, 'label_name' => 'Timestamp', 'type' => 'datetime', 'required' => true, 'percent' => 60, 'method' => 'calendar', 'calendar_icon' => 'right', 'custom_renderer' => "{$this->virtual_class_name}::overrideFieldValue"],
			]
		];
		foreach ($elements as $k => $v) {
			foreach ($v as $k2 => $v2) {
				$form->element($new_container_link, $k, $k2, $v2);
			}
		}
		// link containers if in tabs
		if ($options['type'] == 'tabs') {
			$form->element($options['container_link'], $options['row_link'], $options['row_link'], ['container' => $new_container_link, 'order' => 1]);
		}
		// collection
		array_key_set($form->collection, $details_collection_key, [
			'name' => 'Owners',
			'pk' => $this->pk,
			'type' => '1M',
			'map' => $this->map,
			'owners' => true
		]);
		$form->updateCollectionObject();
		return true;
	}

	/**
	 * Process widget data
	 *
	 * @param object $form
	 * @param array $parent_keys
	 * @param array $data
	 * @param array $parent_data
	 * @param array $fields
	 * @param array $options
	 * @return array
	 */
	public function formProcessWidgetData(& $form, $parent_keys, $data, $parent_data, $fields, $options) {
		$this->preloadModelsAndFields();
		$result = [];
		// start processing of keys
		$detail_key_holder = [];
		$form->generateDetailsPrimaryKey($detail_key_holder, 'reset', $parent_data, $parent_keys, $options);
		foreach ($data as $k => $v) {
			// process pk
			$form->generateDetailsPrimaryKey($detail_key_holder, 'pk', $v, $parent_keys, $options);
			$error_name = $detail_key_holder['error_name'];
			$k2 = $detail_key_holder['pk'];
			// if we have no data
			if (($v['wg_date_servdatetype_code'] ?? '') == '') continue;
			$result[$k2] = array_merge_hard($detail_key_holder['parent_pks'], [
				'wg_date_servdatetype_code' => $v['wg_date_servdatetype_code'],
				'wg_date_timestamp' => $v['wg_date_timestamp'] ?? null,
			]);
		}
		// validate required
		if (!empty($options['validate_required'])) {
			foreach ($result as $k => $v) {
				$temp = [];
				$temp['options']['values_key'] = array_merge($parent_keys, [$k, 'wg_date_timestamp']);
				$temp['options']['required'] = true;
				$temp['options']['php_type'] = 'string';
				$error_name = $form->parentKeysToErrorName($parent_keys) . "[{$k}]";
				$form->validateRequiredOneField($result[$k]['wg_date_timestamp'], "{$error_name}[wg_date_timestamp]", $temp);
			}
		}
		return $result;
	}

	public function overrideFieldName(& $form, & $options, & $value, & $neighbouring_values) {
		$this->preloadModelsAndFields();
		if (isset($this->dates_all_types[$value])) {
			$field = $this->dates_all_types[$value];
			if ($field['ss_servdatetype_readonly']) {
				$options['options']['readonly'] = true;
			}
		}
	}

	public function overrideFieldValue(& $form, & $options, & $value, & $neighbouring_values) {
		$this->preloadModelsAndFields();
		if (!empty($neighbouring_values['wg_date_servdatetype_code'])) {
			$field = $this->dates_all_types[$neighbouring_values['wg_date_servdatetype_code']];
			if ($field['ss_servdatetype_readonly']) {
				$options['options']['static'] = true;
			}
		} else {
			$options['options']['static'] = true;
		}
	}
}