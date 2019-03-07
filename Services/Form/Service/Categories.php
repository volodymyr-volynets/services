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
		'tabs' => ['default_row_type' => 'grid', 'order' => 500, 'type' => 'tabs'],
		'buttons' => ['default_row_type' => 'grid', 'order' => 900],
		'general_container' => ['default_row_type' => 'grid', 'order' => 32000],
		'organizations_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Service\Category\Organizations',
			'details_pk' => ['ss_servcatorg_organization_id'],
			'required' => true,
			'order' => 35001,
		],
	];
	public $rows = [
		'tabs' => [
			'general' => ['order' => 100, 'label_name' => 'General'],
			'organizations' => ['order' => 200, 'label_name' => 'Organizations'],
		],
	];
	public $elements = [
		'top' => [
			'ss_servcategory_id' => [
				'ss_servcategory_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Category #', 'domain' => 'category_id_sequence', 'percent' => 50, 'navigation' => true],
				'ss_servcategory_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 45, 'navigation' => true],
				'ss_servcategory_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_servcategory_name' => [
				'ss_servcategory_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
		],
		'tabs' => [
			'general' => [
				'general' => ['container' => 'general_container', 'order' => 100],
			],
			'organizations' => [
				'organizations' => ['container' => 'organizations_container', 'order' => 100],
			],
		],
		'general_container' => [
			'ss_servcategory_organization_id' => [
				'ss_servcategory_icon' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
			],
		],
		'organizations_container' => [
			'row1' => [
				'ss_servcatorg_organization_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Organization', 'domain' => 'organization_id', 'required' => true, 'null' => true, 'details_unique_select' => true, 'percent' => 95, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'onchange' => 'this.form.submit();'],
				'ss_servcatorg_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			]
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Categories',
		'model' => '\Numbers\Services\Services\Model\Service\Categories',
		'details' => [
			'\Numbers\Services\Services\Model\Service\Category\Organizations' => [
				'name' => 'Organizations',
				'pk' => ['ss_servcatorg_tenant_id', 'ss_servcatorg_servcategory_id', 'ss_servcatorg_organization_id'],
				'type' => '1M',
				'map' => ['ss_servcategory_tenant_id' => 'ss_servcatorg_tenant_id', 'ss_servcategory_id' => 'ss_servcatorg_servcategory_id'],
			],
		]
	];
}