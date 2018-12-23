<?php

namespace Numbers\Services\Services\Model\Service;
class AltNames extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Alt Name';
	public $name = 'ss_service_alt_names';
	public $pk = ['ss_servaltname_tenant_id', 'ss_servaltname_service_id', 'ss_servaltname_name'];
	public $tenant = true;
	public $orderby = [
		'ss_servaltname_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servaltname_';
	public $columns = [
		'ss_servaltname_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servaltname_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servaltname_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
		'ss_servaltname_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servaltname_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_alt_names_pk' => ['type' => 'pk', 'columns' => ['ss_servaltname_tenant_id', 'ss_servaltname_service_id', 'ss_servaltname_name']],
		'ss_servaltname_service_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servaltname_tenant_id', 'ss_servaltname_service_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Services',
			'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = false;
	public $options_map = [];
	public $options_active = [];
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