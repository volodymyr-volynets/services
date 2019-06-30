<?php

namespace Numbers\Services\Services\Model\Service;
class RedFlags extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Red Flags';
	public $name = 'ss_service_red_flags';
	public $pk = ['ss_servredflag_tenant_id', 'ss_servredflag_id'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servredflag_';
	public $columns = [
		'ss_servredflag_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servredflag_id' => ['name' => 'Red Flag #', 'domain' => 'group_id_sequence'],
		'ss_servredflag_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servredflag_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servredflag_business' => ['name' => 'Business Hours', 'type' => 'boolean'],
		'ss_servredflag_interval' => ['name' => 'Interval', 'type' => 'interval'],
		'ss_servredflag_servdatetype_code' => ['name' => 'Date Type Code', 'domain' => 'group_code'],
		'ss_servredflag_red_flag_servstatus_code' => ['name' => 'Red Flag Status', 'domain' => 'group_code'],
		'ss_servredflag_where' => ['name' => 'Where', 'type' => 'text', 'null' => true],
		'ss_servredflag_all_services' => ['name' => 'All Services', 'type' => 'boolean'],
		'ss_servredflag_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_red_flags_pk' => ['type' => 'pk', 'columns' => ['ss_servredflag_tenant_id', 'ss_servredflag_id']],
		'ss_servredflag_code_un' => ['type' => 'unique', 'columns' => ['ss_servredflag_tenant_id', 'ss_servredflag_code']],
		'ss_servredflag_servstatus_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servredflag_tenant_id', 'ss_servredflag_servstatus_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Statuses',
			'foreign_columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_code']
		],
		'ss_servredflag_servdatetype_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servredflag_tenant_id', 'ss_servredflag_servdatetype_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\DateTypes',
			'foreign_columns' => ['ss_servdatetype_tenant_id', 'ss_servdatetype_code']
		]
	];
	public $indexes = [
		'ss_service_red_flags_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servredflag_code', 'ss_servredflag_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servredflag_tenant_id' => 'wg_audit_tenant_id',
			'ss_servredflag_id' => 'wg_audit_servredflag_id'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [];
	public $options_active = [];
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