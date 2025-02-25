<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form\Service;

use Object\Form\Wrapper\Base;

class DateTypes extends Base
{
    public $form_link = 'ss_service_date_types';
    public $module_code = 'SS';
    public $title = 'S/S Date Types Form';
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
            'ss_servdatetype_code' => [
                'ss_servdatetype_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 95, 'navigation' => true],
                'ss_servdatetype_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'ss_servdatetype_name' => [
                'ss_servdatetype_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 70, 'required' => true],
                'ss_servdatetype_filterable' => ['order' => 2, 'label_name' => 'Filterable', 'type' => 'boolean', 'percent' => 15],
                'ss_servdatetype_readonly' => ['order' => 3, 'label_name' => 'Readonly', 'type' => 'boolean', 'percent' => 15],
            ]
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Date Types',
        'model' => '\Numbers\Services\Services\Model\Service\DateTypes'
    ];
}
