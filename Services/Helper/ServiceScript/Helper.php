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
	 * @return int|null
	 */
	public static function renderQuestions(& $form, int $service_id, int $location_id, string $channel_code, string $language_code) {
		// get all ids
		$ids = \Numbers\Services\Services\DataSource\ServiceScript\PreloadIDs::getStatic([
			'where' => [
				'service_id' => $service_id,
				'location_id' => $location_id,
				'channel_code' => $channel_code
			],
		]);
		if (empty($ids) || empty($ids['service_script_id'])) {
			return;
		} else {
			return self::renderQuestionRaw($form, $ids['service_script_id'], $ids['service_channel_id'], $ids['location_region_id'], $language_code);
		}
	}

	/**
	 * Render questions raw
	 *
	 * @param type $form
	 * @param int $service_script_id
	 * @param int $service_channel_id
	 * @param int $location_region_id
	 * @param string $language_code
	 * @return int|null
	 * @throws \Exception
	 */
	public static function renderQuestionRaw(& $form, int $service_script_id, int $service_channel_id, int $location_region_id, string $language_code) {
		if (!isset(self::$cached_all_models)) {
			self::$cached_all_models = \Numbers\Backend\Db\Common\Model\Models::getStatic([
				'pk' => ['sm_model_id']
			]);
		}
		// load questions
		$questions = \Numbers\Services\Services\DataSource\ServiceScripts::getStatic([
			'where' => [
				'service_script_id' => $service_script_id,
				'channel_id' => $service_channel_id,
				'region_id' => $location_region_id,
				'language_code' => $language_code,
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
				'value' => '<b>' . \Format::id($counter) . '. ' . $v['name'] . '</b>' . $mandatory,
				'percent' => 100,
			];
			// answers
			$description = nl2br($v['description']);
			switch ($v['type']) {
				case 'information':
					$form->elements['service_script_container']['ss_field_answer_' . $k]['ss_field_answer_' . $k] = [
						'order' => 1,
						'row_order' => $order + 1,
						'type' => 'text',
						'method' => 'div',
						'value' => $description,
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
							'html_table_description' => $k2,
							'required' => $v['required'],
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
						'required' => $v['required'],
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
						'required' => $v['required'],
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
				'null' => true,
				'default' => null,
				'method' => 'input',
				'percent' => 100,
				'required' => false,
				'domain' => 'amount',
				'align' => 'left',
				'format' => '\Format::number',
				'class' => 'wg_ss_script_total_amount',
				'readonly' => true
			];
			// initialize
			\Layout::addJs('/numbers/media_submodules/Numbers_Services_Widgets_ServiceScripts_Media_JS_ServiceScripts.js', 45000);
			\Layout::onLoad('Numbers.Widgets.ServiceScripts.init();');
		}
		// we must return id of service script
		return $service_script_id;
	}

	/**
	 * Extract service script answers
	 *
	 * @param object $form
	 * @return array
	 */
	public static function extractServiceScriptAnswers(& $form) : array {
		$total = array_key_extract_by_prefix($form->values, 'wg_ss_total_');
		// we need to unset empty answers
		$answers = array_key_extract_by_prefix($form->values, 'ss_field_answer_') ?? [];
		foreach ($answers as $k => $v) {
			if ($v === '' || !isset($v)) {
				unset($answers[$k]);
			}
		}
		return [
			'success' => true,
			'error' => [],
			'total' => $total['amount'] ?? null,
			'answers' => $answers,
		];
	}

	/**
	 * Render as text
	 *
	 */
	public static function renderAsText(int $service_script_id, int $service_channel_id, int $location_region_id, string $language_code, array $answers, string $total = '') : string {
		// load questions
		$questions = \Numbers\Services\Services\DataSource\ServiceScripts::getStatic([
			'where' => [
				'service_script_id' => $service_script_id,
				'channel_id' => $service_channel_id,
				'region_id' => $location_region_id,
				'language_code' => $language_code,
			]
		]);
		$result = '';
		foreach ($questions as $k => $v) {
			$result.= i18n(null, 'Q:') . ' ' . $v['name'] . "\n";
			if (isset($answers[$k])) {
				if ($v['type'] == 'price_amount') {
					$result.= i18n(null, 'A:') . ' ' . trim(\Format::number($answers[$k])) . "\n";
				} else if ($v['type'] == 'price_multiselect' || $v['type'] == 'multiselect') {
					$result.= i18n(null, 'A:') . ' ';
					$temp = [];
					foreach ($answers[$k] as $k2 => $v2) {
						$temp2 = $v['answers'][$k2]['name'];
						if ($v['type'] == 'price_multiselect') {
							$temp2.= ' (' . trim(\Format::number($v['answers'][$k2]['price'])) . ')';
						}
						$temp[] = $temp2;
					}
					$result.= implode("\n", $temp) . "\n";
				} else if ($v['type'] == 'price_select') {
					$result.= i18n(null, 'A:') . ' ' . $v['answers'][$answers[$k]]['name'] . ' (' . trim(\Format::number($v['answers'][$answers[$k]]['price'])) . ")\n";
				} else {
					$result.= i18n(null, 'A:') . ' ' . $answers[$k] . "\n";
				}
			}
			$result.= "\n";
		}
		// total
		if (\Math::compare($total, 0) != 0) {
			$result.= i18n(null, 'T:') . ' ' . \Format::number($total) . "\n";
		}
		return $result;
	}
}