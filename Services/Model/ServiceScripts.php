<?php

namespace Numbers\Services\Services\Model;
class ServiceScripts extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Scripts';
	public $schema;
	public $name = 'ss_service_scripts';
	public $pk = ['ss_servscript_tenant_id', 'ss_servscript_id'];
	public $tenant = true;
	public $orderby = [
		'ss_servscript_id' => SORT_DESC
	];
	public $limit;
	public $column_prefix = 'ss_servscript_';
	public $columns = [
		'ss_servscript_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servscript_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id_sequence'],
		'ss_servscript_code' => ['name' => 'Code', 'domain' => 'group_code', 'null' => true],
		'ss_servscript_name' => ['name' => 'Name', 'domain' => 'name'],
		// version
		'ss_servscript_versioned' => ['name' => 'Versioned', 'type' => 'boolean'],
		'ss_servscript_version_service_script_id' => ['name' => 'Version Service Script #', 'domain' => 'service_script_id', 'null' => true],
		'ss_servscript_version_code' => ['name' => 'Version Code', 'domain' => 'version_code', 'null' => true],
		'ss_servscript_version_name' => ['name' => 'Version Name', 'domain' => 'name', 'null' => true],
		// inactive
		'ss_servscript_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_scripts_pk' => ['type' => 'pk', 'columns' => ['ss_servscript_tenant_id', 'ss_servscript_id']],
		'ss_servscript_code_un' => ['type' => 'unique', 'columns' => ['ss_servscript_tenant_id', 'ss_servscript_code']],
		'ss_servscript_version_service_script_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servscript_tenant_id', 'ss_servscript_version_service_script_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\ServiceScripts',
			'foreign_columns' => ['ss_servscript_tenant_id', 'ss_servscript_id']
		],
	];
	public $indexes = [
		'ss_service_scripts_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servscript_code', 'ss_servscript_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servscript_tenant_id' => 'wg_audit_tenant_id',
			'ss_servscript_id' => 'wg_audit_service_script_id'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servscript_name' => 'name',
		'ss_servscript_version_name' => 'name',
		'ss_servscript_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servscript_inactive' => 0
	];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = false;

	public $data_asset = [
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];
}