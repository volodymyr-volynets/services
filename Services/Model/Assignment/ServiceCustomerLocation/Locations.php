<?php

namespace Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation;
class Locations extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Assignment Locations';
	public $name = 'ss_service_assignment_locations';
	public $pk = ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id', 'ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_id'];
	public $tenant = true;
	public $orderby = [
		'ss_servcustloc_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servcustloc_';
	public $columns = [
		'ss_servcustloc_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servcustloc_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servcustloc_user_id' => ['name' => 'User #', 'domain' => 'user_id'],
		'ss_servcustloc_organization_id' => ['name' => 'Primary Organization #', 'domain' => 'organization_id'],
		'ss_servcustloc_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
		'ss_servcustloc_customer_id' => ['name' => 'Customer #', 'domain' => 'customer_id'],
		'ss_servcustloc_priority_percent' => ['name' => 'Priority Percent', 'domain' => 'amount', 'null' => true],
		'ss_servcustloc_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_assignment_locations_pk' => ['type' => 'pk', 'columns' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id', 'ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_id']],
		'ss_servcustloc_user_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id'],
			'foreign_model' => '\Numbers\Users\Users\Model\Users',
			'foreign_columns' => ['um_user_tenant_id', 'um_user_id']
		],
		'ss_servcustloc_organization_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_organization_id'],
			'foreign_model' => '\Numbers\Users\Organizations\Model\Organizations',
			'foreign_columns' => ['on_organization_tenant_id', 'on_organization_id']
		],
		'ss_servcustloc_customer_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_customer_id'],
			'foreign_model' => '\Numbers\Users\Organizations\Model\Customers',
			'foreign_columns' => ['on_customer_tenant_id', 'on_customer_id']
		],
		'ss_servcustloc_service_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_service_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Services',
			'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
		],
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