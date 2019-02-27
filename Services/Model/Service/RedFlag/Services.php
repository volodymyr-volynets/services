<?php

namespace Numbers\Services\Services\Model\Service\RedFlag;
class Services extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Red Flag Services';
	public $schema;
	public $name = 'ss_service_red_flag_services';
	public $pk = ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_servredflag_id', 'ss_servrdflgserv_service_id'];
	public $tenant = true;
	public $orderby;
	public $limit;
	public $column_prefix = 'ss_servrdflgserv_';
	public $columns = [
		'ss_servrdflgserv_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servrdflgserv_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servrdflgserv_servredflag_id' => ['name' => 'Red Flag #', 'domain' => 'group_id'],
		'ss_servrdflgserv_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
		'ss_servrdflgserv_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_red_flag_services_pk' => ['type' => 'pk', 'columns' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_servredflag_id', 'ss_servrdflgserv_service_id']],
		// there can only be one override per service
		'ss_servrdflgserv_service_id_un' => ['type' => 'unique', 'columns' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_service_id']],
		'ss_servrdflgserv_service_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_service_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Services',
			'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
		],
		'ss_servrdflgserv_servredflag_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_servredflag_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\RedFlags',
			'foreign_columns' => ['ss_servredflag_tenant_id', 'ss_servredflag_id']
		],
	];
	public $indexes = [];
	public $history = false;
	public $audit = false;
	public $optimistic_lock = false;
	public $options_map = [];
	public $options_active = [];
	public $options_skip_i18n = true;
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