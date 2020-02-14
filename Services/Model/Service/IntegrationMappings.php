<?php

namespace Numbers\Services\Services\Model\Service;
class IntegrationMappings extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Integration Mappings';
	public $name = 'ss_service_integration_mappings';
	public $pk = ['ss_servintegmap_tenant_id', 'ss_servintegmap_service_id', 'ss_servintegmap_integtype_code', 'ss_servintegmap_code'];
	public $tenant = true;
	public $orderby = [
		'ss_servintegmap_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servintegmap_';
	public $columns = [
		'ss_servintegmap_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servintegmap_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servintegmap_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
		'ss_servintegmap_integtype_code' => ['name' => 'Integration Type', 'domain' => 'group_code'],
		'ss_servintegmap_code' => ['name' => 'Code', 'domain' => 'code'],
		'ss_servintegmap_name' => ['name' => 'Name', 'domain' => 'name', 'null' => true],
		'ss_servintegmap_default' => ['name' => 'Default', 'type' => 'boolean'],
		'ss_servintegmap_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_integration_mappings_pk' => ['type' => 'pk', 'columns' => ['ss_servintegmap_tenant_id', 'ss_servintegmap_service_id', 'ss_servintegmap_integtype_code', 'ss_servintegmap_code']],
		'ss_servintegmap_service_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servintegmap_tenant_id', 'ss_servintegmap_service_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Services',
			'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
		],
		'ss_servintegmap_integtype_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servintegmap_tenant_id', 'ss_servintegmap_integtype_code'],
			'foreign_model' => '\Numbers\Tenants\Tenants\Model\Integration\Types',
			'foreign_columns' => ['tm_integtype_tenant_id', 'tm_integtype_code']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = false;
	public $options_map = [
		'ss_servintegmap_name' => 'name',
		'ss_servintegmap_inactive' => 'inactve'
	];
	public $options_active = [
		'ss_servintegmap_inactive' => 0
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