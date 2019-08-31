<?php

namespace Numbers\Services\Services\Model\Disposition;
class Types extends \Object\Data {
	public $module_code = 'SS';
	public $title = 'S/S ServiceScript Disposition Types';
	public $column_key = 'ss_disptype_code';
	public $column_prefix = 'ss_disptype_';
	public $columns = [
		'ss_disptype_code' => ['name' => 'Code', 'domain' => 'group_code'],
		'ss_disptype_name' => ['name' => 'Name', 'type' => 'text']
	];
	public $options_map = [
		'ss_disptype_name' => 'name'
	];
	public $orderby = [
		'ss_disptype_name' => SORT_ASC
	];
	public $data = [
		'CANCELATION_REASONS' => ['ss_disptype_name' => 'Cancellation Reasons'],
		'OTHER_REASONS' => ['ss_disptype_name' => 'Other'],
		'REINSTATE_REASONS' => ['ss_disptype_name' => 'Reinstate Reasons'],
	];
}