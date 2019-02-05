<?php

namespace Numbers\Services\Services\Helper\ServiceScript;
class Helper {

	/**
	 * Cached fields
	 *
	 * @var array
	 */
	public static $cached_fields;

	/**
	 * Cached models
	 *
	 * @var array
	 */
	public static $cached_all_models;

	/**
	 * Render questions
	 *
	 * @param object $form
	 * @param int $service_id
	 * @param int $location_id
	 * @param string $channel_code
	 * @throws \Exception
	 */
	public static function renderQuestions(& $form, int $service_id, int $location_id, string $channel_code) {
		if (!isset(self::$cached_all_models)) {
			self::$cached_all_models = \Numbers\Backend\Db\Common\Model\Models::getStatic([
				'pk' => ['sm_model_id']
			]);
		}
		// get all ids
		$ids = \Numbers\Services\Services\DataSource\ServiceScript\PreloadIDs::getStatic([
			'where' => [
				'service_id' => $service_id,
				'location_id' => $location_id,
				'channel_code' => $channel_code
			],
		]);
		if (empty($ids) || empty($ids['service_script_id'])) return;
		// load questions
		$questions = \Numbers\Services\Services\DataSource\ServiceScripts::getStatic([
			'where' => [
				'service_script_id' => $ids['service_script_id'],
				'channel_id' => $ids['service_channel_id'],
				'region_id' => $ids['location_region_id'],
			]
		]);
		if (empty($questions)) return;
		// add pannel
		$form->containers['service_script_panel'] = [
			'type' => 'panels',
			'default_row_type' => 'grid',
			'order' => 200,
		];
		$form->rows['service_script_panel']['service_script_panel'] = ['order' => 100, 'label_name' => 'Service Script', 'panel_type' => 'info', 'panel_icon' => ['type' => 'far fa-list-alt'], 'percent' => 100];
		$form->elements['service_script_panel']['service_script_panel']['service_script_container'] = ['container' => 'service_script_container', 'order' => 100];
		$form->containers['service_script_container'] = [
			'default_row_type' => 'grid',
			'order' => 32000
		];
		// add questions one by one
		$counter = 1;
		$have_price = false;
		foreach ($questions as $k => $v) {
			$order = $counter * 10000 + $v['order'] * 1000;
			// question first
			$mandatory = '';
			if (!empty($v['required'])) {
				$mandatory = ' ' . \HTML::mandatory(['type' => 'mandatory']);
			}
			$form->elements['service_script_container']['ss_field_question_' . $k]['ss_field_question_' . $k] = [
				'order' => 1,
				'row_order' => $order,
				'type' => 'text',
				'method' => 'div',
				'value' => '<b>' . \Format::id($counter) . '. ' . i18n(null, $v['name']) . '</b>' . $mandatory,
				'percent' => 100,
			];
			// answers
			$description = isset($v['description']) ? i18n(null, $v['description']) : null;
			switch ($v['type']) {
				case 'information':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'type' => 'text',
						'method' => 'div',
						'value' => i18n(null, $v['description']),
						'percent' => 100,
					];
					break;
				case 'select':
				case 'multiselect':
					$options_model = null;
					if (!empty($v['model_id'])) {
						$options_model = self::$cached_all_models[$v['model_id']]['sm_model_code'];
					}
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => 'text',
						'null' => true,
						'method' => $v['type'],
						'options_model' => $options_model,
						'options' => $v['answers'],
						'multiple_column' => ($v['type'] == 'multiselect') ? 1 : false,
						'searchable' => true,
						'percent' => 100,
						'required' => $v['required'],
						'description' => $description,
					];
					break;
				case 'price_select':
				case 'price_multiselect':
					$options_model = null;
					if (!empty($v['model_id'])) {
						$options_model = self::$cached_all_models[$v['model_id']]['sm_model_code'];
					}
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => 'text',
						'null' => true,
						'method' => str_replace('price_', '', $v['type']),
						'options_model' => $options_model,
						'options' => $v['answers'],
						'multiple_column' => ($v['type'] == 'price_multiselect') ? 1 : false,
						'searchable' => true,
						'percent' => 100,
						'required' => $v['required'],
						'description' => $description,
						'class' => 'numbers_ss_price_select',
					];
					$have_price = true;
					break;
				case 'price_amount':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => 'text',
						'null' => false,
						'method' => 'input',
						'percent' => 100,
						'required' => $v['required'],
						'description' => $description,
						'domain' => 'amount',
						'align' => 'left',
						'format' => '\Format::number',
						'class' => 'numbers_ss_price_amount'
					];
					$have_price = true;
					break;
				case 'cal_date':
				case 'cal_time':
				case 'cal_datetime':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => str_replace('cal_', '', $v['type']),
						'null' => true,
						'method' => 'calendar',
						'calendar_icon' => 'right',
						'percent' => 100,
						'required' => $v['required'],
						'description' => $description,
					];
					break;
				case 'input':
				case 'textarea':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => 'text',
						'null' => true,
						'method' => $v['type'],
						'percent' => 100,
						'required' => $v['required'],
						'description' => $description,
					];
					break;
				case 'checkbox':
					$inner_counter = 1;
					end($v['answers']);
					$last_key = key($v['answers']);
					foreach ($v['answers'] as $k2 => $v2) {
						$form->elements['service_script_container']['ss_field_answer_' . $k . '_' . $inner_counter]['ss_field_answer_' . $k . '_' . $inner_counter] = [
							'order' => 1,
							'row_order' => $order + $inner_counter,
							'label_name' => '',
							'type' => 'boolean',
							'percent' => 100,
							'html_table_description' => i18n(null, $k2),
							'description' => ($k2 == $last_key) ? $description : null,
						];
						$inner_counter++;
					}
					break;
				case 'radiobox':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => 'text',
						'method' => 'radio',
						'percent' => 100,
						// radio boxes require options
						'options' => $v['answers'],
						'description' => $description,
					];
					break;
				case 'boolean':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'label_name' => '',
						'type' => 'boolean',
						'method' => 'checkbox',
						'percent' => 100,
						'description' => $description,
					];
					break;
				default:
					Throw new \Exception('Question type: ' . $v['type'] . '?');
			}
			$counter++;
		}
		// if we have price
		if ($have_price) {
			$form->elements['service_script_container']['wg_ss_total_question']['wg_ss_total_question'] = [
				'order' => 1,
				'row_order' => PHP_INT_MAX - 1,
				'type' => 'text',
				'method' => 'div',
				'value' => '<b>' . i18n(null, 'Service Script Total Amount') . '</b>',
				'percent' => 100,
			];
			$form->elements['service_script_container']['wg_ss_total_amount']['wg_ss_total_amount'] = [
				'order' => 1,
				'row_order' => PHP_INT_MAX,
				'label_name' => '',
				'type' => 'text',
				'null' => false,
				'method' => 'input',
				'percent' => 100,
				'required' => false,
				'domain' => 'amount',
				'align' => 'left',
				'format' => '\Format::number',
				'class' => 'wg_ss_script_total_amount',
				'readonly' => true
			];
			// ajax
			\Layout::addJs('/numbers/media_submodules/Numbers_Services_Widgets_ServiceScripts_Media_JS_ServiceScripts.js', 45000);
			\Layout::onLoad('Numbers.Widgets.ServiceScripts.init();');
		}
		// we must return id of service script
		return $ids['service_script_id'];
	}

	/**
	 * Extract service script answers
	 *
	 * @param object $form
	 * @return array
	 */
	public static function extractServiceScriptAnswers(& $form, $total_field) : array {
		if (!empty($total_field)) {
			$temp = array_key_extract_by_prefix($form->values, 'wg_ss_total_');
			$form->values[$total_field] = $temp['amount'];
			// todo: recalculate total
		}
		return array_key_extract_by_prefix($form->values, 'ss_field_answer_');
	}
}