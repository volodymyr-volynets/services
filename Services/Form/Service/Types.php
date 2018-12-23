<?php

namespace Numbers\Services\Services\Form\Service;
class Types extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_service_types';
	public $module_code = 'SS';
	public $title = 'S/S Service Types Form';
	public $options = [
		'segment' => self::SEGMENT_FORM,
		'actions' => [
			'refresh' => true,
			'back' => true,
			'new' => true,
			'import' => true
		]
	];
	public $containers = [
		'top' => ['default_row_type' => 'grid', 'order' => 100],
		'buttons' => ['default_row_type' => 'grid', 'order' => 900]
	];
	public $rows = [];
	public $elements = [
		'top' => [
			'ss_servtype_code' => [
				'ss_servtype_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Type Code', 'domain' => 'group_code', 'required' => true, 'percent' => 95, 'navigation' => true],
				'ss_servtype_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_servtype_name' => [
				'ss_servtype_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
			'ss_servtype_group_code' => [
				'ss_servtype_group_code' => ['order' => 1, 'row_order' => 250, 'label_name' => 'Service Type Group', 'domain' => 'group_code', 'null' => true, 'required' => true, 'placeholder' => 'Group', 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Type\Groups::optionsActive'],
			],
			'ss_servtype_icon' => [
				'ss_servtype_icon' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
				'ss_servtype_order' => ['order' => 2, 'label_name' => 'Order', 'domain' => 'order', 'null' => true, 'required' => true, 'percent' => 50],
			],
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Types',
		'model' => '\Numbers\Services\Services\Model\Service\Types'
	];
}