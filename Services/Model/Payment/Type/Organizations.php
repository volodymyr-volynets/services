<?php

namespace Numbers\Services\Services\Model\Payment\Type;
class Organizations extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Payment Type Organizations';
	public $name = 'ss_payment_type_organizations';
	public $pk = ['ss_serpaytorg_tenant_id', 'ss_serpaytorg_serpaytype_code', 'ss_serpaytorg_organization_id'];
	public $tenant = true;
	public $orderby = [
		'ss_serpaytorg_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_serpaytorg_';
	public $columns = [
		'ss_serpaytorg_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_serpaytorg_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_serpaytorg_serpaytype_code' => ['name' => 'Code', 'domain' => 'type_code'],
		'ss_serpaytorg_organization_id' => ['name' => 'Organization #', 'domain' => 'organization_id'],
		'ss_serpaytorg_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_payment_type_organizations_pk' => ['type' => 'pk', 'columns' => ['ss_serpaytorg_tenant_id', 'ss_serpaytorg_serpaytype_code', 'ss_serpaytorg_organization_id']],
		'ss_serpaytorg_serpaytype_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_serpaytorg_tenant_id', 'ss_serpaytorg_serpaytype_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Payment\Types',
			'foreign_columns' => ['ss_serpaytype_tenant_id', 'ss_serpaytype_code']
		],
		'ss_serpaytorg_organization_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_serpaytorg_tenant_id', 'ss_serpaytorg_organization_id'],
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