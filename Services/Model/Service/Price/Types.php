<?php

namespace Numbers\Services\Services\Model\Service\Price;
class Types extends \Object\Data {
	public $module_code = 'SS';
	public $title = 'S/S Service Price Types';
	public $column_key = 'ss_servprctype_id';
	public $column_prefix = 'ss_servprctype_';
	public $orderby = [
		'ss_servprctype_id' => SORT_ASC
	];
	public $columns = [
		'ss_servprctype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
		'ss_servprctype_name' => ['name' => 'Name', 'type' => 'text']
	];
	public $data = [
		10 => ['ss_servprctype_name' => 'Flat'],
		20 => ['ss_servprctype_name' => 'Percent'],
	];
}