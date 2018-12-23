<?php

namespace Numbers\Services\Services\Model\Service\Type;
class Groups extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Type Groups';
	public $name = 'ss_service_type_groups';
	public $pk = ['ss_servtpgrp_tenant_id', 'ss_servtpgrp_code'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servtpgrp_';
	public $columns = [
		'ss_servtpgrp_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servtpgrp_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servtpgrp_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servtpgrp_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_servtpgrp_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servtpgrp_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_type_groups_pk' => ['type' => 'pk', 'columns' => ['ss_servtpgrp_tenant_id', 'ss_servtpgrp_code']],
	];
	public $indexes = [
		'ss_service_type_groups_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servtpgrp_code', 'ss_servtpgrp_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servtpgrp_tenant_id' => 'wg_audit_tenant_id',
			'ss_servtpgrp_code' => 'wg_audit_group_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servtpgrp_name' => 'name',
		'ss_servtpgrp_icon' => 'icon_class',
		'ss_servtpgrp_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servtpgrp_inactive' => 0
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