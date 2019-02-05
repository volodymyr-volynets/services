<?php

namespace Numbers\Services\Services\Model\Service\Price;
class Types extends \Object\Data {
	public $column_key = 'ar_servprctype_id';
	public $column_prefix = 'ar_servprctype_';
	public $orderby = [
		'ar_servprctype_id' => SORT_ASC
	];
	public $columns = [
		'ar_servprctype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
		'ar_servprctype_name' => ['name' => 'Name', 'type' => 'text']
	];
	public $data = [
		10 => ['ar_servprctype_name' => 'Flat'],
		20 => ['ar_servprctype_name' => 'Percent'],
	];
}