<?php

namespace Numbers\Services\Services\Model\Service;
class Statuses extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Statuses';
	public $name = 'ss_service_statuses';
	public $pk = ['ss_servstatus_tenant_id', 'ss_servstatus_code'];
	public $tenant = true;
	public $orderby = [];
	public $limit;
	public $column_prefix = 'ss_servstatus_';
	public $columns = [
		'ss_servstatus_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servstatus_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servstatus_servtype_code' => ['name' => 'Service Type Code', 'domain' => 'group_code'],
		'ss_servstatus_servstsgrp_code' => ['name' => 'Status Group Code', 'domain' => 'group_code'],
		'ss_servstatus_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servstatus_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
		'ss_servstatus_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servstatus_red_flag' => ['name' => 'Red Flag', 'type' => 'boolean'],
		'ss_servstatus_is_action' => ['name' => 'Is Action', 'type' => 'boolean'],
		'ss_servstatus_parent_servstatus_code' => ['name' => 'Parent Status Code', 'domain' => 'group_code', 'null' => true],
		'ss_servstatus_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_statuses_pk' => ['type' => 'pk', 'columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_code']],
		'ss_servstatus_servtype_code_un' => ['type' => 'unique', 'columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_servtype_code', 'ss_servstatus_code']],
		'ss_servstatus_servtype_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_servtype_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Types',
			'foreign_columns' => ['ss_servtype_tenant_id', 'ss_servtype_code']
		],
		'ss_servstatus_parent_servstatus_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_parent_servstatus_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Statuses',
			'foreign_columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_code']
		],
		'ss_servstatus_servstsgrp_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_servstsgrp_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Status\Groups',
			'foreign_columns' => ['ss_servstsgrp_tenant_id', 'ss_servstsgrp_code']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servstatus_tenant_id' => 'wg_audit_tenant_id',
			'ss_servstatus_code' => 'wg_audit_status_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servstatus_name' => 'name',
		'ss_servstatus_icon' => 'icon_class',
		'ss_servstatus_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servstatus_inactive' => 0
	];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = true;

	public $data_asset = [
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];

	public static $cached_statuses;

	/**
	 * Get status name
	 *
	 * @param string $code
	 * @return string
	 */
	public static function getStatusName(string $code) : string {
		if (!isset(self::$cached_statuses)) {
			self::$cached_statuses = self::optionsStatic(['i18n' => true]);
		}
		if (!empty($code)) {
			return self::$cached_statuses[$code]['name'];
		}
		return '';
	}
}