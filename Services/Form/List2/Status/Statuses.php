<?php

namespace Numbers\Services\Services\Form\List2\Status;
class Statuses extends \Object\Form\Wrapper\List2 {
	public $form_link = 'ss_statuses_list';
	public $module_code = 'SS';
	public $title = 'S/S Statuses List';
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
			'full_text_search' => [
				'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.ss_servstatus_code', 'a.ss_servstatus_name'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
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
				'ss_servstatus_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Group Code', 'domain' => 'group_code', 'percent' => 25, 'url_edit' => true],
				'ss_servstatus_name' => ['order' => 2, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 70],
				'ss_servstatus_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'row2' => [
				'blank' => ['order' => 1, 'row_order' => 200, 'label_name' => '', 'percent' => 25],
				'ss_servstatus_type_code' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Service Type', 'domain' => 'group_code', 'percent' => 20, 'options_model' => '\Numbers\Services\Services\Model\Service\Types'],
				'ss_servstatus_group_code' => ['order' => 2, 'label_name' => 'Status Group', 'domain' => 'group_code', 'percent' => 20, 'options_model' => '\Numbers\Services\Services\Model\Service\Status\Groups'],
				'ss_servstatus_red_flag' => ['order' => 3, 'label_name' => 'Red Flag', 'type' => 'boolean', 'percent' => 10],
				'ss_servstatus_parent_servstatus_code' => ['order' => 4, 'label_name' => 'Parent Status', 'domain' => 'group_code', 'percent' => 25, 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses'],
			]
		]
	];
	public $query_primary_model = '\Numbers\Services\Services\Model\Service\Statuses';
	public $list_options = [
		'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
		'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
		'default_limit' => 30,
		'default_sort' => [
			'ss_servstatus_order' => SORT_ASC
		]
	];
	const LIST_SORT_OPTIONS = [
		'ss_servstatus_order' => ['name' => 'Order'],
		'ss_servstatus_name' => ['name' => 'Name']
	];
}