<?php

namespace Numbers\Services\Widgets\ServiceScripts\Form;
class NewServiceScript extends \Object\Form\Wrapper\Base {
	public $form_link = 'wg_new_service_script';
	public $module_code = 'SS';
	public $title = 'S/S New Service Script Form';
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
			'wg_ss_service_script_id' => [
				'wg_ss_service_script_id' => ['order' => 1, 'row_order' => 150, 'label_name' => 'Service Script', 'domain' => 'service_script_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\ServiceScripts::optionsActive', 'options_params' => ['ss_servscript_versioned' => 1], 'onchange' => 'this.form.submit();']
			],
			'wg_ss_channel_id' => [
				'wg_ss_channel_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Channel', 'domain' => 'channel_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Channels::optionsActive', 'onchange' => 'this.form.submit();'],
				'wg_ss_region_id' => ['order' => 2, 'label_name' => 'Region', 'domain' => 'region_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Regions::optionsActive', 'onchange' => 'this.form.submit();'],
			],
			'wg_ss_language_code' => [
				'wg_ss_language_code' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Language', 'domain' => 'language_code', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Internalization\Internalization\Model\Language\Codes::optionsActive', 'onchange' => 'this.form.submit();'],
			],
			self::HIDDEN => [
				'wg_ss_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service Script #', 'domain' => 'big_id_sequence', 'null' => true, 'method' => 'hidden'],
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

	public function overrides(& $form) {
		if (!empty($form->__options['model_table'])) {
			$model = new $form->__options['model_table']();
			$form->collection = [
				'name' => 'Service Scripts',
				'model' => $model->service_scripts_model
			];
		}
		// load script
		$wg_ss_service_script_id = (int) $form->values['wg_ss_service_script_id'] ?? null;
		$wg_ss_channel_id = (int) $form->values['wg_ss_channel_id'] ?? null;
		$wg_ss_region_id = (int) $form->values['wg_ss_region_id'] ?? null;
		$wg_ss_language_code = $form->values['wg_ss_language_code'] ?? null;
		if ($wg_ss_service_script_id && $wg_ss_channel_id && $wg_ss_region_id && $wg_ss_language_code) {
			\Numbers\Services\Services\Helper\ServiceScript\Helper::renderQuestionRaw($form, $wg_ss_service_script_id, $wg_ss_channel_id, $wg_ss_region_id, $wg_ss_language_code);
		}
	}

	public function validate(& $form) {
		$model = new $form->options['model_table']();
		foreach ($model->service_scripts['map'] as $k => $v) {
			if (isset($form->options['input'][$k])) {
				$form->values[$v] = (int) $form->options['input'][$k];
			}
		}
		if (!$form->hasErrors()) {
			$ss_answers = \Numbers\Services\Services\Helper\ServiceScript\Helper::extractServiceScriptAnswers($form);
			$form->values['wg_ss_answers'] = json_encode($ss_answers['answers']);
			$form->values['wg_ss_total_amount'] = $ss_answers['total'] ?? 0;
		}
	}
}