<?php

namespace Numbers\Services\Services\Model\Workflow;
class Steps extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Workflow Steps';
	public $name = 'ss_workflow_steps';
	public $pk = ['ss_servworkstep_tenant_id', 'ss_servworkstep_servworkflow_code', 'ss_servworkstep_parent_servstatus_code', 'ss_servworkstep_child_servstatus_code'];
	public $tenant = true;
	public $orderby = ['ss_servworkstep_parent_servstatus_code' => SORT_ASC, 'ss_servworkstep_child_servstatus_code' => SORT_ASC];
	public $limit;
	public $column_prefix = 'ss_servworkstep_';
	public $columns = [
		'ss_servworkstep_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servworkstep_servworkflow_code' => ['name' => 'Workflow Code', 'domain' => 'group_code'],
		'ss_servworkstep_parent_servstatus_code' => ['name' => 'Parent Status Code', 'domain' => 'group_code'],
		'ss_servworkstep_child_servstatus_code' => ['name' => 'Child Status Code', 'domain' => 'group_code'],
		'ss_servworkstep_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servworkstep_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_workflow_steps_pk' => ['type' => 'pk', 'columns' => ['ss_servworkstep_tenant_id', 'ss_servworkstep_servworkflow_code', 'ss_servworkstep_parent_servstatus_code', 'ss_servworkstep_child_servstatus_code']],
		'ss_servworkstep_servworkflow_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servworkstep_tenant_id', 'ss_servworkstep_servworkflow_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Workflows',
			'foreign_columns' => ['ss_servworkflow_tenant_id', 'ss_servworkflow_code']
		],
	];
	public $indexes = [];
	public $history = false;
	public $audit = false;
	public $optimistic_lock = false;
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = true;

	public $data_asset = [
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];
}