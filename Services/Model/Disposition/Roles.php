<?php

namespace Numbers\Services\Services\Model\Disposition;
class Roles extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Disposition Roles';
	public $name = 'ss_disposition_roles';
	public $pk = ['ss_disprol_tenant_id', 'ss_disprol_disposition_id', 'ss_disprol_role_id'];
	public $tenant = true;
	public $orderby = [
		'ss_disprol_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_disprol_';
	public $columns = [
		'ss_disprol_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_disprol_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_disprol_disposition_id' => ['name' => 'Disposition #', 'domain' => 'disposition_id'],
		'ss_disprol_role_id' => ['name' => 'Role #', 'domain' => 'role_id'],
		'ss_disprol_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_disposition_roles_pk' => ['type' => 'pk', 'columns' => ['ss_disprol_tenant_id', 'ss_disprol_disposition_id', 'ss_disprol_role_id']],
		'ss_disprol_disposition_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_disprol_tenant_id', 'ss_disprol_disposition_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Disposition\Codes',
			'foreign_columns' => ['ss_disposition_tenant_id', 'ss_disposition_id']
		],
		'ss_disprol_role_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_disprol_tenant_id', 'ss_disprol_role_id'],
			'foreign_model' => '\Numbers\Users\Users\Model\Roles',
			'foreign_columns' => ['um_role_tenant_id', 'um_role_id']
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