<?php

namespace Numbers\Services\Services\Form\List2\Service;
class RedFlags extends \Object\Form\Wrapper\List2 {
	public $form_link = 'ss_service_red_flags_list';
	public $module_code = 'SS';
	public $title = 'S/S Red Flags List';
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
			'ss_servredflag_id' => [
				'ss_servredflag_id1' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Red Flag #', 'domain' => 'group_id', 'percent' => 25, 'null' => true, 'query_builder' => 'a.ss_servredflag_id;>='],
				'ss_servredflag_id2' => ['order' => 2, 'label_name' => 'Red Flag #', 'domain' => 'group_id', 'percent' => 25, 'null' => true, 'query_builder' => 'a.ss_servredflag_id;<='],
				'ss_servredflag_inactive1' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Object\Data\Model\Inactive', 'query_builder' => 'a.ss_servredflag_inactive;=']
			],
			'full_text_search' => [
				'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.ss_servredflag_name', 'a.ss_servredflag_code'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
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
				'ss_servredflag_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Red Flag #', 'domain' => 'group_id', 'percent' => 15, 'url_edit' => true],
				'ss_servredflag_name' => ['order' => 2, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 45],
				'ss_servredflag_code' => ['order' => 3, 'label_name' => 'Code', 'domain' => 'group_code', 'percent' => 35],
				'ss_servredflag_inactive' => ['order' => 4, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'row2' => [
				'__blank' => ['order' => 1, 'row_order' => 200, 'label_name' => '', 'percent' => 15],
				'ss_servredflag_servstatus_code' => ['order' => 2, 'label_name' => 'Status', 'domain' => 'group_code', 'percent' => 25, 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses'],
				'ss_servredflag_red_flag_servstatus_code' => ['order' => 3, 'label_name' => 'Red Flag Status', 'domain' => 'group_code', 'percent' => 25, 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses'],
				'ss_servredflag_interval' => ['order' => 4, 'label_name' => 'Interval', 'type' => 'interval', 'percent' => 20],
				'ss_servredflag_business' => ['order' => 5, 'label_name' => 'Business Hours', 'type' => 'boolean', 'percent' => 15],
			]
		]
	];
	public $query_primary_model = '\Numbers\Services\Services\Model\Service\RedFlags';
	public $list_options = [
		'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
		'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
		'default_limit' => 30,
		'default_sort' => [
			'ss_servredflag_id' => SORT_ASC
		]
	];
	const LIST_SORT_OPTIONS = [
		'ss_servredflag_id' => ['name' => 'Red Flag #'],
		'ss_servredflag_name' => ['name' => 'Name'],
	];
}