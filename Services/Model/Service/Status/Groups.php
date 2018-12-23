<?php

namespace Numbers\Services\Services\Model\Service\Status;
class Groups extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Type Groups';
	public $name = 'ss_service_status_groups';
	public $pk = ['ss_servstsgrp_tenant_id', 'ss_servstsgrp_code'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servstsgrp_';
	public $columns = [
		'ss_servstsgrp_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servstsgrp_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servstsgrp_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servstsgrp_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_servstsgrp_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servstsgrp_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_status_groups_pk' => ['type' => 'pk', 'columns' => ['ss_servstsgrp_tenant_id', 'ss_servstsgrp_code']],
	];
	public $indexes = [];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servstsgrp_tenant_id' => 'wg_audit_tenant_id',
			'ss_servstsgrp_code' => 'wg_audit_group_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servstsgrp_name' => 'name',
		'ss_servstsgrp_icon' => 'icon_class',
		'ss_servstsgrp_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servstsgrp_inactive' => 0
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