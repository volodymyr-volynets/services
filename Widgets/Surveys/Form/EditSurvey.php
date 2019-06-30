<?php

namespace Numbers\Services\Widgets\Surveys\Form;
class EditSurvey extends \Object\Form\Wrapper\Base {
	public $form_link = 'wg_edit_survey';
	public $module_code = 'SS';
	public $title = 'S/S Edit Survey Form';
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
			'wg_survey_id' => [
				'wg_survey_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Survey #', 'domain' => 'big_id_sequence', 'null' => true, 'readonly' => true],
			],
			self::HIDDEN => [
				'__first_time' => ['label_name' => 'First Time', 'type' => 'boolean', 'method' => 'hidden']
			]
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

	public function overrides(& $form) {
		if (!empty($form->__options['model_table'])) {
			$model = new $form->__options['model_table']();
			$form->collection = [
				'name' => 'Surveys',
				'model' => $model->surveys_model
			];
		}
		// load script
		$wg_survey_id = (int) $form->values['wg_survey_id'] ?? null;
		if ($wg_survey_id) {
			$model = \Factory::model($model->surveys_model);
			$temp = $model->get([
				'where' => [
					'wg_survey_id' => $wg_survey_id,
				],
				'pk' => null,
				'single_row' => true
			]);
			// render
			if (!empty($temp['wg_survey_service_script_id'])) {
				$this->answers = json_decode($temp['wg_survey_answers'], true);
				array_key_prefix_and_suffix($this->answers, 'ss_field_answer_', '', false);
				\Numbers\Services\Services\Helper\ServiceScript\Helper::renderQuestionRaw($form, $temp['wg_survey_service_script_id'], $temp['wg_survey_channel_id'], $temp['wg_survey_region_id'], $temp['wg_survey_language_code']);
			}
		}
	}

	public function processAllValues(& $form) {
		if (empty($form->values['__first_time'])) {
			$form->values = array_merge_hard($form->values, $this->answers);
			$form->values['__first_time'] = 1;
		}
	}

	public function validate(& $form) {
		$model = new $form->options['model_table']();
		foreach ($model->surveys['map'] as $k => $v) {
			if (isset($form->options['input'][$k])) {
				$form->values[$v] = (int) $form->options['input'][$k];
			}
		}
		if (!$form->hasErrors()) {
			$ss_answers = \Numbers\Services\Services\Helper\ServiceScript\Helper::extractServiceScriptAnswers($form);
			$form->values['wg_survey_answers'] = json_encode($ss_answers['answers']);
			$form->values['wg_survey_total_amount'] = $ss_answers['total'] ?? 0;
		}
	}
}