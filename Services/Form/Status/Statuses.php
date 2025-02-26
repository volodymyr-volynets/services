<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form\Status;

use Object\Form\Wrapper\Base;

class Statuses extends Base
{
    public $form_link = 'ss_statuses';
    public $module_code = 'SS';
    public $title = 'S/S Statuses Form';
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
            'ss_servstatus_code' => [
                'ss_servstatus_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 95, 'navigation' => true],
                'ss_servstatus_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'ss_servstatus_name' => [
                'ss_servstatus_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
            ],
            'ss_servstatus_icon' => [
                'ss_servstatus_icon' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
                'ss_servstatus_order' => ['order' => 2, 'label_name' => 'Order', 'domain' => 'order', 'null' => true, 'required' => true, 'percent' => 50],
            ],
            'ss_servstatus_servtype_code' => [
                'ss_servstatus_servtype_code' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Types::optionsActive', 'onchange' => 'this.form.submit();'],
                'ss_servstatus_servstsgrp_code' => ['order' => 2, 'label_name' => 'Status Group', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Status\Groups::optionsActive'],
            ],
            'ss_servstatus_red_flag' => [
                'ss_servstatus_red_flag' => ['order' => 1, 'row_order' => 500, 'label_name' => 'Red Flag', 'type' => 'boolean', 'percent' => 15],
                'ss_servstatus_is_action' => ['order' => 2, 'label_name' => 'Is Action', 'type' => 'boolean', 'percent' => 15],
                'ss_servstatus_weight' => ['order' => 3, 'label_name' => 'Weight', 'domain' => 'weight', 'null' => true, 'percent' => 20],
                'ss_servstatus_parent_servstatus_code' => ['order' => 4, 'label_name' => 'Parent Status', 'domain' => 'group_code', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_depends' => ['ss_servstatus_servtype_code' => 'ss_servstatus_servtype_code', 'ss_servstatus_code;<>' => 'ss_servstatus_code']],
            ]
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Statuses',
        'model' => '\Numbers\Services\Services\Model\Service\Statuses'
    ];
}
