<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Widgets\Complaints\Form;

use Numbers\Users\Documents\Base\Helper\MassUpload;
use Object\Form\Wrapper\Base;

class NewComplaint extends Base
{
    public $form_link = 'wg_new_complaint';
    public $module_code = 'SS';
    public $title = 'S/S New Complaint Form';
    public $options = [
        'on_success_refresh_parent' => true
    ];
    public $containers = [
        'top' => ['default_row_type' => 'grid', 'order' => 100],
        'buttons' => ['default_row_type' => 'grid', 'order' => 900]
    ];
    public $rows = [];
    public $elements = [
        'top' => [
            'wg_complaint_id' => [
                'wg_complaint_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Complaint #', 'domain' => 'big_id_sequence', 'null' => true, 'readonly' => true],
            ],
            'wg_complaint_servcompstatus_code' => [
                'wg_complaint_servcompstatus_code' => ['order' => 1, 'row_order' => 150, 'label_name' => 'Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Widgets\Complaints\Model\Statuses::optionsActive'],
            ],
            'wg_complaint_comment' => [
                'wg_complaint_comment' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Comment', 'domain' => 'comment', 'null' => true, 'percent' => 100, 'required' => true, 'method' => 'wysiwyg', 'wysiwyg_height' => 250]
            ],
            'new_comment_important' => [
                'wg_complaint_important' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Important', 'type' => 'boolean', 'method' => 'checkbox', 'percent' => 25],
                'wg_complaint_public' => ['order' => 2, 'label_name' => 'Public', 'type' => 'boolean', 'method' => 'checkbox', 'percent' => 25],
                'wg_complaint_file_1_new' => ['order' => 3, 'label_name' => 'File(s)', 'type' => 'mixed', 'percent' => 50, 'method' => 'file', 'null' => true, 'multiple' => true, 'validator_method' => '\Numbers\Users\Documents\Base\Validator\Files::validate', 'validator_params' => ['types' => ['images', 'audio', 'documents']], 'description' => 'Extensions: Images, Audio, Documents'],
            ],
        ],
        'buttons' => [
            self::BUTTONS => [
                self::BUTTON_SUBMIT_SAVE => self::BUTTON_SUBMIT_SAVE_DATA,
                self::BUTTON_SUBMIT_DELETE => self::BUTTON_SUBMIT_DELETE_DATA,
            ]
        ]
    ];
    public $collection = [];

    public function overrides(& $form)
    {
        if (!empty($form->__options['model_table'])) {
            $model = new $form->__options['model_table']();
            $form->collection = [
                'name' => 'Complaints',
                'model' => $model->complaints_model
            ];
        }
    }

    public function refresh(& $form)
    {
        if (isset($_POST['wg_complaint_comment'])) {
            $form->values['wg_complaint_comment'] = \Request::input('wg_complaint_comment', true, false, [
                'skip_xss_on_keys' => ['wg_complaint_comment'],
                'trim_empty_html_input' => true,
                'remove_script_tag' => true
            ]);
        }
    }

    public function validate(& $form)
    {
        $model = new $form->options['model_table']();
        foreach ($model->complaints['map'] as $k => $v) {
            if (isset($form->options['input'][$k])) {
                $form->values[$v] = (int) $form->options['input'][$k];
            }
        }
        // add files
        if (!empty($form->values['wg_complaint_file_1_new'])) {
            MassUpload::uploadFewFilesInForm(
                $form,
                10,
                $form->values['wg_complaint_file_1_new'],
                'wg_complaint_file_',
                $form->fields['wg_complaint_file_1_new']['options']['validator_params'] ?? []
            );
        }
    }

    public function overrideFieldValue(& $form, & $options, & $value, & $neighbouring_values)
    {
        if ($options['options']['field_name'] == 'wg_complaint_comment') {
            if (strpos($value, "\n") !== false) {
                $value = nl2br($value);
            }
        }
    }
}
