<?php

namespace Numbers\Services\Services\Form\List2\Service;
class Categories extends \Object\Form\Wrapper\List2 {
	public $form_link = 'ss_service_categories_list';
	public $module_code = 'SS';
	public $title = 'S/S Service Categories List';
	public $options = [
		'segment' => self::SEGMENT_LIST,
		'actions' => [
			'refresh' => true,
			'new' => ['onclick' => null],
			'filter_sort' => ['value' => 'Filter/Sort', 'sort' => 32000, 'icon' => 'fas fa-filter', 'onclick' => 'Numbers.Form.listFilterSortToggle(this);']
		]
	];
	public $containers = [
		'tabs' => ['default_row_type' => 'grid', 'order' => 1000, 'type' => 'tabs', 'class' => 'numbers_form_filter_sort_container'],
		'filter' => ['default_row_type' => 'grid', 'order' => 1500],
		'sort' => self::LIST_SORT_CONTAINER,
		self::LIST_CONTAINER => ['default_row_type' => 'grid', 'order' => PHP_INT_MAX],
	];
	public $rows = [
		'tabs' => [
			'filter' => ['order' => 100, 'label_name' => 'Filter'],
			'sort' => ['order' => 200, 'label_name' => 'Sort'],
		]
	];
	public $elements = [
		'tabs' => [
			'filter' => [
				'filter' => ['container' => 'filter', 'order' => 100]
			],
			'sort' => [
				'sort' => ['container' => 'sort', 'order' => 100]
			]
		],
		'filter' => [
			'ss_servcategory_id' => [
				'ss_servcategory_id1' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Category #', 'domain' => 'category_id', 'percent' => 25, 'null' => true, 'query_builder' => 'a.ss_servcategory_id;>='],
				'ss_servcategory_id2' => ['order' => 2, 'label_name' => 'Category #', 'domain' => 'category_id', 'percent' => 25, 'null' => true, 'query_builder' => 'a.ss_servcategory_id;<='],
				'ss_servcategory_inactive1' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Object\Data\Model\Inactive', 'query_builder' => 'a.ss_servcategory_inactive;=']
			],
			'ss_servcategory_organization_id' => [
				'ss_servcategory_organization_id1' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Organization', 'domain' => 'organization_id', 'percent' => 100, 'null' => true, 'method' => 'multiselect', 'options_model' => '\Numbers\Users\Organizations\Model\Organizations', 'multiple_column' => 1, 'query_builder' => 'a.ss_servcategory_organization_id;='],
			],
			'full_text_search' => [
				'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.ss_servcategory_code', 'a.ss_servcategory_name'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
			]
		],
		'sort' => [
			'__sort' => [
				'__sort' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Sort', 'domain' => 'code', 'details_unique_select' => true, 'percent' => 50, 'null' => true, 'method' => 'select', 'options' => self::LIST_SORT_OPTIONS, 'onchange' => 'this.form.submit();'],
				'__order' => ['order' => 2, 'label_name' => 'Order', 'type' => 'smallint', 'default' => SORT_ASC, 'percent' => 50, 'null' => true, 'method' => 'select', 'no_choose' => true, 'options_model' => '\Object\Data\Model\Order', 'onchange' => 'this.form.submit();'],
			]
		],
		self::LIST_BUTTONS => self::LIST_BUTTONS_DATA,
		self::LIST_CONTAINER => [
			'row1' => [
				'ss_servcategory_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Category', 'domain' => 'category_id', 'percent' => 15, 'url_edit' => true],
				'ss_servcategory_name' => ['order' => 2, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 55],
				'ss_servcategory_code' => ['order' => 3, 'label_name' => 'Code', 'domain' => 'group_code', 'percent' => 25],
				'ss_servcategory_inactive' => ['order' => 4, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			]
		]
	];
	public $query_primary_model = '\Numbers\Services\Services\Model\Service\Categories';
	public $list_options = [
		'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
		'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
		'default_limit' => 30,
		'default_sort' => [
			'ss_servcategory_id' => SORT_ASC
		]
	];
	const LIST_SORT_OPTIONS = [
		'ss_servcategory_id' => ['name' => 'Category #'],
		'ss_servcategory_name' => ['name' => 'Name']
	];
}