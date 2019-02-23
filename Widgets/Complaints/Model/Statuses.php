<?php

namespace Numbers\Services\Widgets\Complaints\Model;
class Statuses extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Complaint Statuses';
	public $name = 'ss_service_complaint_statuses';
	public $pk = ['ss_servcompstatus_tenant_id', 'ss_servcompstatus_code'];
	public $tenant = true;
	public $orderby = ['ss_servcompstatus_order' => SORT_ASC];
	public $limit;
	public $column_prefix = 'ss_servcompstatus_';
	public $columns = [
		'ss_servcompstatus_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servcompstatus_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servcompstatus_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servcompstatus_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servcompstatus_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_complaint_statuses_pk' => ['type' => 'pk', 'columns' => ['ss_servcompstatus_tenant_id', 'ss_servcompstatus_code']],
	];
	public $indexes = [
		'ss_service_complaint_statuses_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servcompstatus_code', 'ss_servcompstatus_name']],
	];
	public $history = false;
	public $audit = [
		'map' => [
			'ss_servcompstatus_tenant_id' => 'wg_audit_tenant_id',
			'ss_servcompstatus_code' => 'wg_audit_servcompstatus_code'
		]
	];
	public $optimistic_lock = true;
	public $options_map = [
		'ss_servcompstatus_name' => 'name',
		'ss_servcompstatus_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servcompstatus_inactive' => 0
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