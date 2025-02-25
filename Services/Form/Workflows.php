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

class Workflows extends Base
{
    public $form_link = 'ss_workflows';
    public $module_code = 'SS';
    public $title = 'S/S Workflows Form';
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
        'steps_container' => [
            'type' => 'details',
            'details_rendering_type' => 'table',
            'details_new_rows' => 1,
            'details_key' => '\Numbers\Services\Services\Model\Workflow\Steps',
            'details_pk' => ['ss_servworkstep_parent_servstatus_code', 'ss_servworkstep_child_servstatus_code'],
            'required' => true,
            'order' => 35000,
        ],
    ];
    public $rows = [
        'tabs' => [
            'general' => ['order' => 100, 'label_name' => 'General'],
            'steps' => ['order' => 150, 'label_name' => 'Steps'],
        ],
    ];
    public $elements = [
        'top' => [
            'ss_servworkflow_code' => [
                'ss_servworkflow_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 95, 'navigation' => true],
                'ss_servworkflow_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ],
            'ss_servworkflow_name' => [
                'ss_servworkflow_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
            ],
        ],
        'tabs' => [
            'general' => [
                'general' => ['container' => 'general_container', 'order' => 100],
            ],
            'steps' => [
                'steps' => ['container' => 'steps_container', 'order' => 100],
            ],
        ],
        'general_container' => [
            'ss_servworkflow_servtype_code' => [
                'ss_servworkflow_servtype_code' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 100, 'placeholder' => 'Type', 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Types::optionsActive', 'onchange' => 'this.form.submit();'],
            ],
            'ss_servworkflow_icon' => [
                'ss_servworkflow_icon' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
            ],
        ],
        'steps_container' => [
            'row1' => [
                'ss_servworkstep_parent_servstatus_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Parent Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_depends' => ['ss_servstatus_servtype_code' => 'parent::ss_servworkflow_servtype_code'], 'options_params' => ['ss_servstatus_code;<>' => 'detail::ss_servworkstep_child_servstatus_code'], 'onchange' => 'this.form.submit();'],
                'ss_servworkstep_child_servstatus_code' => ['order' => 2, 'label_name' => 'Child Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_depends' => ['ss_servstatus_servtype_code' => 'parent::ss_servworkflow_servtype_code'], 'options_params' => ['ss_servstatus_code;<>' => 'detail::ss_servworkstep_parent_servstatus_code'], 'onchange' => 'this.form.submit();'],
            ],
            'row2' => [
                'ss_servworkstep_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'null' => true, 'required' => true, 'percent' => 95],
                'ss_servworkstep_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ]
        ],
        'buttons' => [
            self::BUTTONS => self::BUTTONS_DATA_GROUP
        ]
    ];
    public $collection = [
        'name' => 'Workflows',
        'model' => '\Numbers\Services\Services\Model\Workflows',
        'details' => [
            '\Numbers\Services\Services\Model\Workflow\Steps' => [
                'name' => 'Steps',
                'pk' => ['ss_servworkstep_tenant_id', 'ss_servworkstep_servworkflow_code', 'ss_servworkstep_parent_servstatus_code', 'ss_servworkstep_child_servstatus_code'],
                'type' => '1M',
                'map' => ['ss_servworkflow_tenant_id' => 'ss_servworkstep_tenant_id', 'ss_servworkflow_code' => 'ss_servworkstep_servworkflow_code']
            ],
        ]
    ];
}
