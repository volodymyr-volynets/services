<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Widgets\Surveys\Form;

use Numbers\Services\Services\Helper\ServiceScript\Helper;
use Object\Form\Wrapper\Base;

class NewSurvey extends Base
{
    public $form_link = 'wg_new_survey';
    public $module_code = 'SS';
    public $title = 'S/S New Survey Form';
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
            'wg_survey_service_script_id' => [
                'wg_survey_service_script_id' => ['order' => 1, 'row_order' => 150, 'label_name' => 'Survey', 'domain' => 'service_script_id', 'null' => true, 'required' => true, 'placeholder' => 'Survey', 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\ServiceScripts::optionsActive', 'options_params' => ['ss_servscript_versioned' => 1, 'ss_servscript_type_id' => 20], 'onchange' => 'this.form.submit();']
            ],
            'wg_survey_channel_id' => [
                'wg_survey_channel_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Channel', 'domain' => 'channel_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Channels::optionsActive', 'onchange' => 'this.form.submit();'],
                'wg_survey_region_id' => ['order' => 2, 'label_name' => 'Region', 'domain' => 'region_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Regions::optionsActive', 'onchange' => 'this.form.submit();'],
            ],
            'wg_survey_language_code' => [
                'wg_survey_language_code' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Language', 'domain' => 'language_code', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Internalization\Internalization\Model\Language\Codes::optionsActive', 'options_params' => ['in_language_code;<>' => 'sm0'], 'onchange' => 'this.form.submit();'],
            ],
            self::HIDDEN => [
                'wg_survey_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service Script #', 'domain' => 'big_id_sequence', 'null' => true, 'method' => 'hidden'],
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
    public $answers = [];

    public function overrides(& $form)
    {
        if (!empty($form->__options['model_table'])) {
            $model = new $form->__options['model_table']();
            $form->collection = [
                'name' => 'Surveys',
                'model' => $model->surveys_model
            ];
        }
        // load script
        $wg_survey_service_script_id = (int) ($form->values['wg_survey_service_script_id'] ?? null);
        $wg_survey_channel_id = (int) ($form->values['wg_survey_channel_id'] ?? null);
        $wg_survey_region_id = (int) ($form->values['wg_survey_region_id'] ?? null);
        $wg_survey_language_code = $form->values['wg_survey_language_code'] ?? null;
        if ($wg_survey_service_script_id && $wg_survey_channel_id && $wg_survey_region_id && $wg_survey_language_code) {
            Helper::renderQuestionRaw($form, $wg_survey_service_script_id, $wg_survey_channel_id, $wg_survey_region_id, $wg_survey_language_code);
        }
    }

    public function validate(& $form)
    {
        $model = new $form->options['model_table']();
        foreach ($model->surveys['map'] as $k => $v) {
            if (isset($form->options['input'][$k])) {
                $form->values[$v] = (int) $form->options['input'][$k];
            }
        }
        if (!$form->hasErrors()) {
            $ss_answers = Helper::extractServiceScriptAnswers($form);
            $form->values['wg_survey_answers'] = json_encode($ss_answers['answers']);
            $form->values['wg_survey_total_amount'] = $ss_answers['total'] ?? 0;
        }
    }
}
