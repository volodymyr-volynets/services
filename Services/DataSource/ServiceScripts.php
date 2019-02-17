<?php

namespace Numbers\Services\Services\DataSource;
class ServiceScripts extends \Object\DataSource {
	public $db_link;
	public $db_link_flag;
	public $pk = ['id'];
	public $columns;
	public $orderby;
	public $limit;
	public $single_row;
	public $single_value;
	public $options_map = [
		'name' => 'name',
		'inactive' => 'inactive'
	];
	public $options_active = [
		'inactive' => 0
	];
	public $column_prefix = 'um_user_';

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = false;

	public $primary_model = '\Numbers\Services\Services\Model\ServiceScript\Questions';
	public $parameters = [
		'service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id', 'required' => true],
		'channel_id' => ['name' => 'Channel #', 'domain' => 'channel_id', 'required' => true],
		'region_id' => ['name' => 'Region #', 'domain' => 'region_id', 'required' => true],
		'language_code' => ['name' => 'Language Code', 'domain' => 'language_code', 'required' => true],
	];

	public function query($parameters, $options = []) {
		$this->query->columns([
			'id' => 'a.ss_servquestion_id',
			'name' => 'a.ss_servquestion_name',
			'type' => 'a.ss_servquestion_type_code',
			'model' => 'd.sm_model_code',
			'required' => 'a.ss_servquestion_required',
			'inactive' => 'a.ss_servquestion_inactive',
			'description' => 'b.ss_servquesdesc_description',
			'order' => 'a.ss_servquestion_order',
			'answers' => 'c.answers'
		]);
		// join
		$this->query->join('LEFT', new \Numbers\Services\Services\Model\ServiceScript\Question\Description(), 'b', 'ON', [
			['AND', ['a.ss_servquestion_service_script_id', '=', 'b.ss_servquesdesc_service_script_id', true], false],
			['AND', ['a.ss_servquestion_id', '=', 'b.ss_servquesdesc_question_id', true], false]
		]);
		$this->query->join('LEFT', function (& $query) use ($parameters) {
			$query = \Numbers\Services\Services\Model\ServiceScript\Question\Answers::queryBuilderStatic(['alias' => 'inner_c', 'skip_acl' => true])->select();
			$query->columns([
				'inner_c.ss_servquesanswer_question_id',
				'answers' => $query->db_object->sqlHelper('string_agg', ['expression' => "concat_ws(':::', inner_c.ss_servquesanswer_name, inner_c.ss_servquesanswer_price, inner_c.ss_servquesanswer_order)", 'delimiter' => ';;;'])
			]);
			$query->where('AND', ['inner_c.ss_servquesanswer_service_script_id', '=', $parameters['service_script_id']]);
			$query->groupby(['inner_c.ss_servquesanswer_question_id']);
		}, 'c', 'ON', [
			['AND', ['a.ss_servquestion_id', '=', 'c.ss_servquesanswer_question_id', true], false]
		]);
		$this->query->join('LEFT', new \Numbers\Backend\Db\Common\Model\Models(), 'd', 'ON', [
			['AND', ['a.ss_servquestion_model_id', '=', 'd.sm_model_id', true], false]
		]);
		// where
		$this->query->where('AND', ['a.ss_servquestion_service_script_id', '=', $parameters['service_script_id']]);
		$this->query->where('AND', ['a.ss_servquestion_language_code', '=', $parameters['language_code']]);
		$this->query->where('AND', ['a.ss_servquestion_inactive', '=', 0]);
		// regions
		$this->query->where('AND', function (& $query) use ($parameters) {
			// allow existing values
			$query->where('OR', ['a.ss_servquestion_all_regions', '=', 1]);
			if (!empty($parameters['region_id'])) {
				$query->where('OR', function (& $query) use ($parameters) {
					$query = \Numbers\Services\Services\Model\ServiceScript\Question\Regions::queryBuilderStatic(['alias' => 'inner_a'])->select();
					$query->columns(1);
					$query->where('AND', ['inner_a.ss_servquesregion_service_script_id', '=', 'a.ss_servquestion_service_script_id', true]);
					$query->where('AND', ['inner_a.ss_servquesregion_region_id', '=', $parameters['region_id']]);
				}, true);
			}
		});
		$this->query->where('AND', function (& $query) use ($parameters) {
			// allow existing values
			$query->where('OR', ['a.ss_servquestion_all_channels', '=', 1]);
			if (!empty($parameters['channel_id'])) {
				$query->where('OR', function (& $query) use ($parameters) {
					$query = \Numbers\Services\Services\Model\ServiceScript\Question\Channels::queryBuilderStatic(['alias' => 'inner_b'])->select();
					$query->columns(1);
					$query->where('AND', ['inner_b.ss_servqueschan_service_script_id', '=', 'a.ss_servquestion_service_script_id', true]);
					$query->where('AND', ['inner_b.ss_servqueschan_channel_id', '=', $parameters['channel_id']]);
				}, true);
			}
		});
		// order
		$this->query->orderby(['ss_servquestion_order' => SORT_ASC]);
	}

	public function process($data, $options = []) {
		foreach ($data as $k => $v) {
			$data[$k]['name'] = i18n(null, $data[$k]['name']);
			// answers
			if (!empty($v['answers'])) {
				$data[$k]['answers'] = [];
				$temp = explode(';;;', $v['answers']);
				foreach ($temp as $v2) {
					$temp2 = explode(':::', $v2);
					$data[$k]['answers'][$temp2[0]] = [
						'name' => i18n(null, $temp2[0]),
						'order' => $temp2[2],
						'price' => $temp2[1]
					];
				}
				array_key_sort($data[$k]['answers'], ['order' => SORT_ASC], ['order' => SORT_NUMERIC]);
			} else {
				$data[$k]['answers'] = null;
			}
			if (!empty($v['model'])) {
				$data[$k]['answers'] = [];
				$class = $v['model'];
				$model = new $class();
				$temp = $model->options();
				foreach ($temp as $k2 => $v2) {
					$data[$k]['answers'][$k2] = [
						'name' => $v2['name'],
						'order' => 0,
						'price' => 0
					];
				}
			}
			// boolean
			if ($v['type'] == 'boolean') {
				$data[$k]['answers'] = [
					'Yes' => [
						'name' => i18n(null, 'Yes'),
					],
					'No' => [
						'name' => i18n(null, 'No'),
					]
				];
			}
		}
		return $data;
	}
}