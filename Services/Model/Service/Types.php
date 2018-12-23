<?php

namespace Numbers\Services\Services\Model\Service;
class Types extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Types';
	public $name = 'ss_service_types';
	public $pk = ['ss_servtype_tenant_id', 'ss_servtype_code'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servtype_';
	public $columns = [
		'ss_servtype_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servtype_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servtype_group_code' => ['name' => 'Service Type Group Code', 'domain' => 'group_code'],
		'ss_servtype_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servtype_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_servtype_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servtype_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_types_pk' => ['type' => 'pk', 'columns' => ['ss_servtype_tenant_id', 'ss_servtype_code']],
		'ss_servtype_group_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servtype_tenant_id', 'ss_servtype_group_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Type\Groups',
			'foreign_columns' => ['ss_servtpgrp_tenant_id', 'ss_servtpgrp_code']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servtype_tenant_id' => 'wg_audit_tenant_id',
			'ss_servtype_code' => 'wg_audit_type_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servtype_name' => 'name',
		'ss_servtype_icon' => 'icon_class',
		'ss_servtype_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servtype_inactive' => 0
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