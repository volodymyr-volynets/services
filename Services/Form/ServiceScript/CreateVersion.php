<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form\ServiceScript;

use Numbers\Services\Services\Form\ServiceScripts;
use Object\Content\Messages;
use Object\Form\Wrapper\Base;

class CreateVersion extends Base
{
    public $form_link = 'ss_service_script_create_version';
    public $module_code = 'SS';
    public $title = 'S/S Create Version (Service Script)';
    public $options = [
        'segment' => self::SEGMENT_ACTIVATE,
        'actions' => [
            'refresh' => true,
            'back' => true,
        ],
        'no_ajax_form_reload' => true
    ];
    public $containers = [
        'top' => ['default_row_type' => 'grid', 'order' => 1]
    ];
    public $rows = [];
    public $elements = [
        'top' => [
            'ss_servscript_id' => [
                'ss_servscript_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service Script', 'domain' => 'service_script_id', 'null' => true, 'percent' => 100, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\ServiceScripts::optionsActive', 'options_params' => ['ss_servscript_versioned' => 0]],
            ],
            'ss_servscript_version_code' => [
                'ss_servscript_version_code' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Version Code', 'domain' => 'version_code', 'required' => true, 'percent' => 50],
                'ss_servscript_version_name' => ['order' => 2, 'label_name' => 'Version Name', 'domain' => 'name', 'required' => true, 'percent' => 50],
            ],
            self::BUTTONS => [
                self::BUTTON_SUBMIT => self::BUTTON_SUBMIT_DATA,
            ]
        ]
    ];

    public function save(& $form)
    {
        $model = ServiceScripts::API();
        $model->begin();
        // copy service script
        $result = $model->get([
            'ss_servscript_id' => $form->values['ss_servscript_id']
        ]);
        $result['values']['ss_servscript_versioned'] = 1;
        $result['values']['ss_servscript_version_service_script_id'] = $form->values['ss_servscript_id'];
        $result['values']['ss_servscript_version_code'] = $form->values['ss_servscript_version_code'];
        $result['values']['ss_servscript_version_name'] = $form->values['ss_servscript_version_name'];
        $result['values']['ss_servscript_code'] = concat_ws(' - ', $result['values']['ss_servscript_code'], strtoupper($result['values']['ss_servscript_version_code']));
        unset($result['values']['ss_servscript_id'], $result['values']['ss_servscript_optimistic_lock']);
        $result = $model->save($result['values']);
        if ($result['success']) {
            $form->error(SUCCESS, Messages::OPERATION_EXECUTED);
            $model->commit();
        } else {
            $form->error(DANGER, $result['error']);
            $model->rollback();
        }
    }
}
