<?php

namespace Numbers\Services\Services\Model;
class Services extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Services';
	public $schema;
	public $name = 'ss_services';
	public $pk = ['ss_service_tenant_id', 'ss_service_id'];
	public $tenant = true;
	public $orderby;
	public $limit;
	public $column_prefix = 'ss_service_';
	public $columns = [
		'ss_service_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_service_id' => ['name' => 'Service #', 'domain' => 'service_id_sequence'],
		'ss_service_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_service_servtype_code' => ['name' => 'Service Type Code', 'domain' => 'group_code'],
		'ss_service_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_service_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_service_assignment_type_id' => ['name' => 'Assignment Type #', 'domain' => 'type_id', 'options_model' => '\Numbers\Services\Services\Model\Service\Assignment\Types'],
		'ss_service_category_id' => ['name' => 'Category #', 'domain' => 'category_id'],
		'ss_service_queue_type_id' => ['name' => 'Queue Type #', 'domain' => 'type_id'],
		'ss_service_service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id', 'null' => true],
		'ss_service_billable' => ['name' => 'Billable', 'type' => 'boolean'],
		'ss_service_master_invoice' => ['name' => 'Master Invoice', 'type' => 'boolean'],
		'ss_service_invoicing_details' => ['name' => 'Invoicing Details', 'domain' => 'description', 'null' => true],
		'ss_service_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_services_pk' => ['type' => 'pk', 'columns' => ['ss_service_tenant_id', 'ss_service_id']],
		'ss_service_code_un' => ['type' => 'unique', 'columns' => ['ss_service_tenant_id', 'ss_service_code']],
		'ss_service_assignment_type_id_un' => ['type' => 'unique', 'columns' => ['ss_service_tenant_id', 'ss_service_id', 'ss_service_assignment_type_id']],
		'ss_service_category_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_service_tenant_id', 'ss_service_category_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Categories',
			'foreign_columns' => ['ss_servcategory_tenant_id', 'ss_servcategory_id']
		],
		'ss_service_queue_type_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_service_tenant_id', 'ss_service_queue_type_id'],
			'foreign_model' => '\Numbers\Users\Organizations\Model\Queue\Types',
			'foreign_columns' => ['on_quetype_tenant_id', 'on_quetype_id']
		],
		'ss_service_servtype_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_service_tenant_id', 'ss_service_servtype_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Types',
			'foreign_columns' => ['ss_servtype_tenant_id', 'ss_servtype_code']
		]
	];
	public $indexes = [
		'ss_services_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_service_code', 'ss_service_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_service_tenant_id' => 'wg_audit_tenant_id',
			'ss_service_id' => 'wg_audit_service_id'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_service_name' => 'name',
		'ss_service_icon' => 'icon_class',
		'ss_service_inactive' => 'inactive',
		'ss_service_category_id' => 'category_id',
	];
	public $options_active = [
		'ss_service_inactive' => 0
	];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = false;

	public $who = [
		'inserted' => true,
		'updated' => true
	];

	public $attributes = [
		'map' => [
			'ss_service_tenant_id' => 'wg_attribute_tenant_id',
			'ss_service_id' => 'wg_attribute_service_id'
		]
	];

	public $comments = [
		'map' => [
			'ss_service_tenant_id' => 'wg_comment_tenant_id',
			'ss_service_id' => 'wg_comment_service_id'
		]
	];

	public $documents = [
		'map' => [
			'ss_service_tenant_id' => 'wg_document_tenant_id',
			'ss_service_id' => 'wg_document_service_id'
		]
	];

	public $data_asset = [
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];

	/**
	 * @see $this->options()
	 */
	public function optionsJsonWithServiceCategories($options = []) {
		if (!empty($options['show_all'])) {
			$data = $this->options($options);
		} else {
			$data = $this->optionsActive($options);
		}
		$categories = \Numbers\Services\Services\Model\Service\Categories::optionsStatic();
		$result = [];
		foreach ($data as $k => $v) {
			$parent = \Object\Table\Options::optionJsonFormatKey(['parent_id' => (int) $v['category_id'], 'service_id' => null]);
			if (!isset($result[$parent])) {
				$result[$parent] = $categories[$v['category_id']];
				$result[$parent]['disabled'] = !empty($options['enable_parent']) ? false : true;
			}
			$key = \Object\Table\Options::optionJsonFormatKey(['parent_id' => (int) $v['category_id'], 'service_id' => (int) $k]);
			$result[$key] = $v;
			$result[$key]['parent'] = $parent;
		}
		if (!empty($result)) {
			$converted = \Helper\Tree::convertByParent($result, 'parent');
			$result = [];
			\Helper\Tree::convertTreeToOptionsMulti($converted, 0, ['name_field' => 'name'], $result);
		}
		return $result;
	}
}