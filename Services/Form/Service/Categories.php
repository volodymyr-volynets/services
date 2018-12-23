<?php

namespace Numbers\Services\Services\Form\Service;
class Categories extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_service_categories';
	public $module_code = 'SS';
	public $title = 'S/S Service Categories Form';
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
			'ss_servcategory_id' => [
				'ss_servcategory_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Category #', 'domain' => 'category_id_sequence', 'percent' => 50, 'navigation' => true],
				'ss_servcategory_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 45, 'navigation' => true],
				'ss_servcategory_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_servcategory_name' => [
				'ss_servcategory_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
			'ss_servcategory_organization_id' => [
				'ss_servcategory_organization_id' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Organization', 'domain' => 'organization_id', 'null' => true, 'percent' => 50, 'required' => true, 'method' => 'select', 'options_model' => '\\Numbers\Users\Organizations\Model\Organizations::optionsActive'],
				'ss_servcategory_icon' => ['order' => 2, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
			],
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Categories',
		'model' => '\Numbers\Services\Services\Model\Service\Categories'
	];
}