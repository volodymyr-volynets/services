<?php

namespace Numbers\Services\Services\Model\Service;
class DateTypes extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Dates';
	public $name = 'ss_service_date_types';
	public $pk = ['ss_servdatetype_tenant_id', 'ss_servdatetype_code'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servdatetype_';
	public $columns = [
		'ss_servdatetype_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servdatetype_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servdatetype_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servdatetype_filterable' => ['name' => 'Filterable', 'type' => 'boolean'],
		'ss_servdatetype_readonly' => ['name' => 'Readonly', 'type' => 'boolean'],
		'ss_servdatetype_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_date_types_pk' => ['type' => 'pk', 'columns' => ['ss_servdatetype_tenant_id', 'ss_servdatetype_code']],
	];
	public $indexes = [
		'ss_service_date_types_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servdatetype_code', 'ss_servdatetype_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servdatetype_tenant_id' => 'wg_audit_tenant_id',
			'ss_servdatetype_code' => 'wg_audit_datetype_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servdatetype_name' => 'name',
		'ss_servdatetype_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servdatetype_inactive' => 0
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