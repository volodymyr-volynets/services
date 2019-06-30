<?php

namespace Numbers\Services\Widgets\Surveys\Model\Virtual;
class Surveys extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $name = null;
	public $pk = ['wg_survey_tenant_id', 'wg_survey_id'];
	public $tenant = true;
	public $module;
	public $orderby;
	public $limit;
	public $column_prefix = 'wg_survey_'; // must not change it
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

	public $who = [
		'inserted' => true,
	];

	/**
	 * Constructor
	 */
	public function __construct($class, $virtual_class_name, $options = []) {
		// add regular columns
		$this->columns['wg_survey_tenant_id'] = ['name' => 'Tenant #', 'domain' => 'tenant_id'];
		$this->columns['wg_survey_id'] = ['name' => 'Service Script #', 'domain' => 'big_id_sequence'];
		$this->determineModelMap($class, 'surveys', $virtual_class_name, $options);
		$this->columns['wg_survey_service_script_id'] = ['name' => 'Service Script #', 'domain' => 'service_script_id', 'null' => true];
		$this->columns['wg_survey_channel_id'] = ['name' => 'Channel #', 'domain' => 'channel_id', 'null' => true];
		$this->columns['wg_survey_region_id'] = ['name' => 'Region #', 'domain' => 'region_id', 'null' => true];
		$this->columns['wg_survey_language_code'] = ['name' => 'Language Code', 'domain' => 'language_code', 'null' => true];
		$this->columns['wg_survey_answers'] = ['name' => 'Answers', 'type' => 'json', 'null' => true];
		$this->columns['wg_survey_legacy_answers'] = ['name' => 'Answers (Legacy)', 'type' => 'text', 'null' => true];
		$this->columns['wg_survey_total_amount'] = ['name' => 'Total Amount', 'domain' => 'amount'];
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
		$this->constraints[$this->name . '_service_script_id_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_survey_tenant_id', 'wg_survey_service_script_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\ServiceScripts',
			'foreign_columns' => ['ss_servscript_tenant_id', 'ss_servscript_id']
		];
		// construct table
		parent::__construct($options);
	}
}