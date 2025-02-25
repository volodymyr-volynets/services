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

class Channels extends Base
{
    public $form_link = 'ss_service_channels';
    public $module_code = 'SS';
    public $title = 'S/S Service Channels Form';
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
            'ss_servchannel_id' => [
                'ss_servchannel_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Channel #', 'domain' => 'channel_id_sequence', 'percent' => 50, 'navigation' => true],
                'ss_servchannel_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 45, 'navigation' => true],
                'ss_servchannel_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'ss_servchannel_name' => [
                'ss_servchannel_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
            ],
            'ss_servchannel_icon' => [
                'ss_servchannel_icon' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
            ],
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Categories',
        'model' => '\Numbers\Services\Services\Model\Service\Channels'
    ];
}
