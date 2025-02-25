<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form;

use Object\Form\Wrapper\Base;

class PaymentTypes extends Base
{
    public $form_link = 'ss_payment_types';
    public $module_code = 'SS';
    public $title = 'S/S Payment Types Form';
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
            'details_key' => '\Numbers\Services\Services\Model\Payment\Type\Organizations',
            'details_pk' => ['ss_serpaytorg_organization_id'],
            'required' => true,
            'order' => 35000,
        ],
        'service_types_container' => [
            'type' => 'details',
            'details_rendering_type' => 'table',
            'details_new_rows' => 1,
            'details_key' => '\Numbers\Services\Services\Model\Payment\Type\ServiceTypes',
            'details_pk' => ['ss_serpaytservtype_servtype_code'],
            'required' => true,
            'order' => 35000,
        ],
    ];
    public $rows = [
        'tabs' => [
            'general' => ['order' => 100, 'label_name' => 'General'],
            'organizations' => ['order' => 150, 'label_name' => 'Organizations'],
            'service_types' => ['order' => 200, 'label_name' => 'Service Types'],
        ],
    ];
    public $elements = [
        'top' => [
            'ss_serpaytype_code' => [
                'ss_serpaytype_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 95, 'navigation' => true],
                'ss_serpaytype_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'ss_serpaytype_name' => [
                'ss_serpaytype_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
            ],
        ],
        'tabs' => [
            'general' => [
                'general' => ['container' => 'general_container', 'order' => 100],
            ],
            'organizations' => [
                'organizations' => ['container' => 'organizations_container', 'order' => 100],
            ],
            'service_types' => [
                'service_types' => ['container' => 'service_types_container', 'order' => 100],
            ]
        ],
        'general_container' => [
            'ss_serpaytype_icon' => [
                'ss_serpaytype_icon' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
            ],
            'ss_serpaytype_order' => [
                'ss_serpaytype_order' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Order', 'domain' => 'order', 'null' => true, 'required' => true, 'percent' => 50],
                'ss_serpaytype_group_id' => ['order' => 2, 'label_name' => 'Group', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Payment\Type\Groups'],
            ],
            'ss_serpaytype_regular_expression' => [
                'ss_serpaytype_regular_expression' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Regular Expression', 'domain' => 'code', 'null' => true, 'percent' => 100],
            ]
        ],
        'organizations_container' => [
            'row1' => [
                'ss_serpaytorg_organization_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Organization', 'domain' => 'organization_id', 'required' => true, 'null' => true, 'details_unique_select' => true, 'percent' => 95, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'onchange' => 'this.form.submit();'],
                'ss_servorg_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ]
        ],
        'service_types_container' => [
            'row1' => [
                'ss_serpaytservtype_servtype_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'details_unique_select' => true, 'percent' => 95, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Types::optionsActive', 'onchange' => 'this.form.submit();'],
                'ss_serpaytservtype_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ]
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Payment Types',
        'model' => '\Numbers\Services\Services\Model\Payment\Types',
        'details' => [
            '\Numbers\Services\Services\Model\Payment\Type\Organizations' => [
                'name' => 'Organizations',
                'pk' => ['ss_serpaytorg_tenant_id', 'ss_serpaytorg_serpaytype_code', 'ss_serpaytorg_organization_id'],
                'type' => '1M',
                'map' => ['ss_serpaytype_tenant_id' => 'ss_serpaytorg_tenant_id', 'ss_serpaytype_code' => 'ss_serpaytorg_serpaytype_code']
            ],
            '\Numbers\Services\Services\Model\Payment\Type\ServiceTypes' => [
                'name' => 'Organizations',
                'pk' => ['ss_serpaytservtype_tenant_id', 'ss_serpaytservtype_serpaytype_code', 'ss_serpaytservtype_servtype_code'],
                'type' => '1M',
                'map' => ['ss_serpaytype_tenant_id' => 'ss_serpaytservtype_tenant_id', 'ss_serpaytype_code' => 'ss_serpaytservtype_serpaytype_code']
            ],
        ]
    ];
}
