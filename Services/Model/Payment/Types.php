<?php

namespace Numbers\Services\Services\Model\Payment;
class Types extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Payment Types';
	public $name = 'ss_payment_types';
	public $pk = ['ss_serpaytype_tenant_id', 'ss_serpaytype_code'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_serpaytype_';
	public $columns = [
		'ss_serpaytype_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_serpaytype_code' => ['name' => 'Code', 'domain' => 'type_code'],
		'ss_serpaytype_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_serpaytype_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_serpaytype_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_serpaytype_group_id' => ['name' => 'Group #', 'domain' => 'type_id', 'options_model' => '\Numbers\Services\Services\Model\Payment\Type\Groups'],
		'ss_serpaytype_regular_expression' => ['name' => 'Regular Expression', 'domain' => 'code', 'null' => true],
		'ss_serpaytype_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_payment_types_pk' => ['type' => 'pk', 'columns' => ['ss_serpaytype_tenant_id', 'ss_serpaytype_code']],
	];
	public $indexes = [
		'ss_payment_types_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_serpaytype_code', 'ss_serpaytype_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_serpaytype_tenant_id' => 'wg_audit_tenant_id',
			'ss_serpaytype_code' => 'wg_audit_type_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_serpaytype_name' => 'name',
		'ss_serpaytype_icon' => 'icon_class',
		'ss_serpaytype_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_serpaytype_inactive' => 0
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