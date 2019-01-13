<?php

namespace Numbers\Services\Services\Model\ServiceSheet;
class Types extends \Object\Data {
	public $column_key = 'ss_servsheettype_code';
	public $column_prefix = 'ss_servsheettype_';
	public $columns = [
		'ss_servsheettype_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_servsheettype_name' => ['name' => 'Name', 'type' => 'text']
	];
	public $options_map = [
		'ss_servsheettype_name' => 'name'
	];
	public $orderby = [
		'ss_servsheettype_name' => SORT_ASC
	];
	public $data = [
		'CUSTOMER' => ['ss_servsheettype_name' => 'Customer'],
		'LOCATION' => ['ss_servsheettype_name' => 'Location'],
	];
}