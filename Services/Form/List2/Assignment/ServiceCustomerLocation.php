<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form\List2\Assignment;

use Numbers\Users\Organizations\Helper\Filter;
use Object\Form\Wrapper\List2;

class ServiceCustomerLocation extends List2
{
    public $form_link = 'ss_service_customer_location_list';
    public $module_code = 'SS';
    public $title = 'S/S Service Customer Location List';
    public $options = [
        'segment' => self::SEGMENT_LIST,
        'actions' => [
            'refresh' => true,
            'new' => true,
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
            'ss_servcustloc_user_id' => [
                'ss_servcustloc_user_id1' => ['order' => 1, 'row_order' => 100, 'label_name' => 'User', 'domain' => 'user_id', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Users\Users\Model\Users::optionsActive', 'query_builder' => 'a.ss_servcustloc_user_id;='],
            ],
            'ss_servcustloc_organization_id' => [
                'ss_servcustloc_organization_id1' => ['order' => 1, 'row_order' => 200] + Filter::F_ORGANIZATION_ID_SINGLE + ['onchange' => 'this.form.submit();', 'query_builder' => 'a.ss_servcustloc_organization_id;='],
                'ss_servcustloc_customer_id1' => ['order' => 2] + Filter::F_CUSTOMER_ID_SINGLE + ['options_depends' => ['on_customer_organization_id' => 'ss_servcustloc_organization_id1'], 'onchange' => 'this.form.submit();', 'query_builder' => 'a.ss_servcustloc_customer_id;='],
            ],
            'ss_servcustloc_service_id' => [
                'ss_servcustloc_service_id1' => ['order' => 1, 'row_order' => 300, 'order_for_defaults' => -31050, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\DataSource\Services::optionsActive', 'options_depends' => ['selected_organizations' => 'ss_servcustloc_organization_id1', 'customer_id' => 'ss_servcustloc_customer_id1'], 'onchange' => 'this.form.submit();', 'query_builder' => 'a.ss_servcustloc_service_id;='],
            ],
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
                'ss_servcustloc_user_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'User', 'domain' => 'user_id', 'null' => true, 'percent' => 50, 'options_model' => '\Numbers\Users\Users\Model\Users', 'url_edit' => true],
                'ss_servcustloc_service_id' => ['order' => 2, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'percent' => 45, 'options_model' => '\Numbers\Services\Services\Model\Services'],
                'ss_servcustloc_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'row2' => [
                'ss_servcustloc_organization_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Organization', 'domain' => 'organization_id', 'percent' => 50, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations'],
                'ss_servcustloc_customer_id' => ['order' => 2, 'label_name' => 'Customer', 'domain' => 'customer_id', 'percent' => 50, 'options_model' => '\Numbers\Users\Organizations\Model\Customers'],
            ],
            'row3' => [
                'ss_servcustlmap_location_id' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Location(s)', 'domain' => 'location_id', 'null' => true, 'percent' => 100, 'options_model' => '\Numbers\Users\Organizations\Model\Locations', 'subquery' => ['model' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map', 'alias' => 'inner_a', 'groupby' => ['ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_id'], 'on' => [['ss_servcustloc_user_id', '=', 'ss_servcustlmap_user_id'], ['ss_servcustloc_organization_id', '=', 'ss_servcustlmap_organization_id'], ['ss_servcustloc_service_id', '=', 'ss_servcustlmap_service_id'], ['ss_servcustloc_customer_id', '=', 'ss_servcustlmap_customer_id']]]],
            ]
        ]
    ];
    public $query_primary_model = '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations';
    public $list_options = [
        'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'default_limit' => 30,
        'default_sort' => [
            'ss_servcustloc_user_id' => SORT_ASC
        ]
    ];
    public const LIST_SORT_OPTIONS = [
        'ss_servcustloc_user_id' => ['name' => 'User #'],
        'ss_servcustloc_organization_id' => ['name' => 'Organization #'],
        'ss_servcustloc_customer_id' => ['name' => 'Customer #'],
        'ss_servcustloc_service_id' => ['name' => 'Service #'],
    ];
}
