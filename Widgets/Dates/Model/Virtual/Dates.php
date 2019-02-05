<?php

namespace Numbers\Services\Widgets\Dates\Model\Virtual;
class Dates extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $name = null;
	public $pk = [];
	public $tenant = true;
	public $module;
	public $orderby;
	public $limit;
	public $column_prefix = 'wg_date_'; // must not change it
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
		'updated' => true
	];

	/**
	 * Constructor
	 */
	public function __construct($class, $virtual_class_name, $options = []) {
		// add regular columns
		$this->columns['wg_date_tenant_id'] = ['name' => 'Tenant #', 'domain' => 'tenant_id'];
		$this->determineModelMap($class, 'dates', $virtual_class_name, $options);
		$this->columns['wg_date_servdatetype_code'] = ['name' => 'Date Type Code', 'domain' => 'group_code'];
		$this->columns['wg_date_timestamp'] = ['name' => 'Timestamp', 'type' => 'timestamp'];
		$this->pk = array_merge(array_values($this->map), ['wg_date_servdatetype_code']);
		// add constraints
		$this->constraints[$this->name . '_pk'] = [
			'type' => 'pk',
			'columns' => $this->pk
		];
		$this->constraints[$this->name . '_parent_fk'] = [
			'type' => 'fk',
			'columns' => array_values($this->map),
			'foreign_model' => $class,
			'foreign_columns' => array_keys($this->map)
		];
		$this->constraints[$this->name . '_servdatetype_code_fk'] = [
			'type' => 'fk',
			'columns' => ['wg_date_tenant_id', 'wg_date_servdatetype_code'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\DateTypes',
			'foreign_columns' => ['ss_servdatetype_tenant_id', 'ss_servdatetype_code']
		];
		// construct table
		parent::__construct($options);
	}
}