<?php

namespace Numbers\Services\Services\Model\ServiceScript;
class Types extends \Object\Data {
	public $column_key = 'ss_servscrptype_id';
	public $column_prefix = 'ss_servscrptype_';
	public $columns = [
		'ss_servscrptype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
		'ss_servscrptype_name' => ['name' => 'Name', 'type' => 'text']
	];
	public $options_map = [
		'ss_servscrptype_name' => 'name'
	];
	public $orderby = [
		'ss_servscrptype_name' => SORT_ASC
	];
	public $data = [
		10 => ['ss_servscrptype_name' => 'Service Script'],
		20 => ['ss_servscrptype_name' => 'Survey'],
	];
}