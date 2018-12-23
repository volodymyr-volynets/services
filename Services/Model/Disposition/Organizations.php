<?php

namespace Numbers\Services\Services\Model\Disposition;
class Organizations extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Disposition Organizations';
	public $name = 'ss_disposition_organizations';
	public $pk = ['ss_disporg_tenant_id', 'ss_disporg_disposition_id', 'ss_disporg_organization_id'];
	public $tenant = true;
	public $orderby = [
		'ss_disporg_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_disporg_';
	public $columns = [
		'ss_disporg_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_disporg_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_disporg_disposition_id' => ['name' => 'Disposition #', 'domain' => 'disposition_id'],
		'ss_disporg_organization_id' => ['name' => 'Organization #', 'domain' => 'organization_id'],
		'ss_disporg_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_disposition_organizations_pk' => ['type' => 'pk', 'columns' => ['ss_disporg_tenant_id', 'ss_disporg_disposition_id', 'ss_disporg_organization_id']],
		'ss_disporg_disposition_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_disporg_tenant_id', 'ss_disporg_disposition_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Disposition\Codes',
			'foreign_columns' => ['ss_disposition_tenant_id', 'ss_disposition_id']
		],
		'ss_disporg_organization_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_disporg_tenant_id', 'ss_disporg_organization_id'],
			'foreign_model' => '\Numbers\Users\Organizations\Model\Organizations',
			'foreign_columns' => ['on_organization_tenant_id', 'on_organization_id']
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