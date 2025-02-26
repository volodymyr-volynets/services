<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form\List2;

use Object\Form\Wrapper\List2;

class Services extends List2
{
    public $form_link = 'ss_services_list';
    public $module_code = 'SS';
    public $title = 'S/S Services List';
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
            'ss_service_id' => [
                'ss_service_id1' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service #', 'domain' => 'service_id', 'percent' => 25, 'null' => true, 'query_builder' => 'a.ss_service_id;>='],
                'ss_service_id2' => ['order' => 2, 'label_name' => 'Service #', 'domain' => 'service_id', 'percent' => 25, 'null' => true, 'query_builder' => 'a.ss_service_id;<='],
                'ss_service_inactive1' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Object\Data\Model\Inactive', 'query_builder' => 'a.ss_service_inactive;=']
            ],
            'full_text_search' => [
                'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.ss_service_code', 'a.ss_service_name'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
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
                'ss_service_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service #', 'domain' => 'service_id', 'percent' => 15, 'url_edit' => true],
                'ss_service_name' => ['order' => 2, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 55],
                'ss_service_code' => ['order' => 3, 'label_name' => 'Code', 'domain' => 'group_code', 'percent' => 25],
                'ss_service_inactive' => ['order' => 4, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'row2' => [
                'blank' => ['order' => 1, 'row_order' => 200, 'label_name' => '', 'percent' => 15],
                'ss_service_servtype_code' => ['order' => 2, 'row_order' => 200, 'label_name' => 'Service Type', 'domain' => 'group_code', 'percent' => 35, 'options_model' => '\Numbers\Services\Services\Model\Service\Types'],
                'ss_service_assignment_type_id' => ['order' => 4, 'label_name' => 'Assignment Type #', 'domain' => 'type_id', 'percent' => 35, 'options_model' => '\Numbers\Services\Services\Model\Service\Assignment\Types'],
                'ss_service_billable' => ['order' => 5, 'label_name' => 'Red Flag', 'type' => 'boolean', 'percent' => 15],
            ],
            'row3' => [
                'blank2' => ['order' => 1, 'row_order' => 300, 'label_name' => '', 'percent' => 15],
                'ss_servorg_organization_id' => ['order' => 2, 'label_name' => 'Organization(s)', 'domain' => 'organization_id', 'percent' => 55, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations', 'subquery' => ['model' => '\Numbers\Services\Services\Model\Service\Organizations', 'alias' => 'inner_a', 'groupby' => 'ss_servorg_service_id', 'on' => [['a.ss_service_id', '=', 'inner_a.ss_servorg_service_id']]]],
                'ss_service_category_id' => ['order' => 3, 'label_name' => 'Category', 'domain' => 'category_id', 'percent' => 30, 'options_model' => 'Numbers\Services\Services\Model\Service\Categories'],
            ]
        ]
    ];
    public $query_primary_model = '\Numbers\Services\Services\Model\Services';
    public $list_options = [
        'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'default_limit' => 30,
        'default_sort' => [
            'ss_service_id' => SORT_ASC
        ]
    ];
    public const LIST_SORT_OPTIONS = [
        'ss_service_id' => ['name' => 'Service #'],
        'ss_service_name' => ['name' => 'Name']
    ];
}
