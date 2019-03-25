<?php

namespace Numbers\Services\Widgets\Complaints\Model\Virtual;
class Complaints extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $name = null;
	public $pk = ['wg_complaint_id'];
	public $tenant = true;
	public $module;
	public $orderby;
	public $limit;
	public $column_prefix = 'wg_complaint_'; // must not change it
	public $columns = [];
	public $constraints = [];
	public $indexes = [];
	public $history = false;
	public $audit = false; // must not change it
	public $options_map = [];
	public $options_active = [];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = false;

	public $relation; // must not change it
	public $attributes = false; // must not change it

	public $who = [
		'inserted' => true,
		'updated' => true,
	];

	/**
	 * Constructor
	 */
	public function __construct($class, $virtual_class_name, $options = []) {
		// add regular columns
		$this->columns['wg_complaint_tenant_id'] = ['name' => 'Tenant #', 'domain' => 'tenant_id'];
		$this->columns['wg_complaint_id'] = ['name' => 'Complaint #', 'domain' => 'big_id_sequence'];
		$this->determineModelMap($class, 'complaints', $virtual_class_name, $options);
		$this->columns['wg_complaint_servcompstatus_code'] = ['name' => 'Status', 'domain' => 'group_code'];
		$this->columns['wg_complaint_comment'] = ['name' => 'Comment', 'domain' => 'comment'];
		$this->columns['wg_complaint_important'] = ['name' => 'Important', 'type' => 'boolean'];
		$this->columns['wg_complaint_public'] = ['name' => 'Public', 'type' => 'boolean'];
		$this->columns['wg_complaint_file_1'] = ['name' => 'File 1', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_2'] = ['name' => 'File 2', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_3'] = ['name' => 'File 3', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_4'] = ['name' => 'File 4', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_5'] = ['name' => 'File 5', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_6'] = ['name' => 'File 6', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_7'] = ['name' => 'File 7', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_8'] = ['name' => 'File 8', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_9'] = ['name' => 'File 9', 'domain' => 'file_id', 'null' => true];
		$this->columns['wg_complaint_file_10'] = ['name' => 'File 10', 'domain' => 'file_id', 'null' => true];
		// add constraints
		$this->constraints[$this->name . '_pk'] = [
			'type' => 'pk',
			'columns' => ['wg_complaint_tenant_id', 'wg_complaint_id']
		];
		$this->constraints[$this->name . '_parent_fk'] = [
			'type' => 'fk',
			'columns' => array_values($this->map),
			'foreign_model' => $class,
			'foreign_columns' => array_keys($this->map)
		];
		$this->constraints[$this->name . '_servcompstatus_code_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_complaint_tenant_id', 'wg_complaint_servcompstatus_code'],
			'foreign_model' => '\Numbers\Services\Widgets\Complaints\Model\Statuses',
			'foreign_columns' => ['ss_servcompstatus_tenant_id', 'ss_servcompstatus_code']
		];
		// construct table
		parent::__construct($options);
	}
}