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

class Groups extends Base
{
    public $form_link = 'ss_status_groups';
    public $module_code = 'SS';
    public $title = 'S/S Status Groups Form';
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
            'ss_servstsgrp_code' => [
                'ss_servstsgrp_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Group Code', 'domain' => 'group_code', 'required' => true, 'percent' => 95, 'navigation' => true],
                'ss_servstsgrp_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'ss_servstsgrp_name' => [
                'ss_servstsgrp_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
            ],
            'ss_servstsgrp_icon' => [
                'ss_servstsgrp_icon' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
                'ss_servstsgrp_order' => ['order' => 2, 'label_name' => 'Order', 'domain' => 'order', 'null' => true, 'required' => true, 'percent' => 50],
            ],
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Groups',
        'model' => '\Numbers\Services\Services\Model\Service\Status\Groups'
    ];
}
