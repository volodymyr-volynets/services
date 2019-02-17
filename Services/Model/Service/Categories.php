<?php

namespace Numbers\Services\Services\Model\Service;
class Categories extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Categories';
	public $name = 'ss_service_categories';
	public $pk = ['ss_servcategory_tenant_id', 'ss_servcategory_id'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servcategory_';
	public $columns = [
		'ss_servcategory_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servcategory_id' => ['name' => 'Category #', 'domain' => 'category_id_sequence'],
		'ss_servcategory_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servcategory_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servcategory_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_servcategory_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_categories_pk' => ['type' => 'pk', 'columns' => ['ss_servcategory_tenant_id', 'ss_servcategory_id']],
		'ss_servcategory_code_un' => ['type' => 'unique', 'columns' => ['ss_servcategory_tenant_id', 'ss_servcategory_code']],
	];
	public $indexes = [];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servcategory_tenant_id' => 'wg_audit_tenant_id',
			'ss_servcategory_id' => 'wg_audit_category_id'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servcategory_name' => 'name',
		'ss_servcategory_icon' => 'icon_class',
		'ss_servcategory_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servcategory_inactive' => 0
	];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = false;

	public $data_asset = [
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];
}