<?php

namespace Numbers\Services\Services\Model\Service;
class Pricing extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Pricing';
	public $name = 'ss_service_pricing';
	public $pk = ['ss_servprice_tenant_id', 'ss_servprice_service_id', 'ss_servprice_currency_code'];
	public $tenant = true;
	public $orderby = [
		'ss_servprice_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servprice_';
	public $columns = [
		'ss_servprice_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servprice_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servprice_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
		'ss_servprice_currency_code' => ['name' => 'Currency Code', 'domain' => 'currency_code'],
		'ss_servprice_cost_amount' => ['name' => 'Cost Amount', 'domain' => 'amount'],
		'ss_servprice_cost_minimum' => ['name' => 'Minimum Cost', 'domain' => 'amount', 'null' => true],
		'ss_servprice_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_pricing_pk' => ['type' => 'pk', 'columns' => ['ss_servprice_tenant_id', 'ss_servprice_service_id', 'ss_servprice_currency_code']],
		'ss_servprice_service_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servprice_tenant_id', 'ss_servprice_service_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Services',
			'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
		],
		'ss_servprice_currency_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servprice_tenant_id', 'ss_servprice_currency_code'],
			'foreign_model' => '\Numbers\Countries\Currencies\Model\Currencies',
			'foreign_columns' => ['cy_currency_tenant_id', 'cy_currency_code']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = [];
	public $optimistic_lock = false;
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