<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class Answers extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Script Answers';
	public $schema;
	public $name = 'ss_service_script_question_answers';
	public $pk = ['ss_servquesanswer_tenant_id', 'ss_servquesanswer_service_script_id', 'ss_servquesanswer_question_id', 'ss_servquesanswer_name'];
	public $tenant = true;
	public $orderby = [
		'ss_servquesanswer_order' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servquesanswer_';
	public $columns = [
		'ss_servquesanswer_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servquesanswer_service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id'],
		'ss_servquesanswer_question_id' => ['name' => 'Question #', 'domain' => 'question_id'],
		'ss_servquesanswer_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servquesanswer_name' => ['name' => 'Name', 'domain' => 'name'],
		'ss_servquesanswer_price' => ['name' => 'Price', 'domain' => 'amount', 'null' => true],
		'ss_servquesanswer_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servquesanswer_description' => ['name' => 'Description', 'domain' => 'description', 'null' => true],
		'ss_servquesanswer_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_script_question_answers_pk' => ['type' => 'pk', 'columns' => ['ss_servquesanswer_tenant_id', 'ss_servquesanswer_service_script_id', 'ss_servquesanswer_question_id', 'ss_servquesanswer_name']],
		'ss_servquesanswer_question_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servquesanswer_tenant_id', 'ss_servquesanswer_service_script_id', 'ss_servquesanswer_question_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\ServiceScript\Questions',
			'foreign_columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_id']
		]
	];
	public $indexes = [
		'ss_service_script_question_answers_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servquesanswer_name']],
	];
	public $history = false;
	public $audit = false;
	public $optimistic_lock = false;
	public $options_map = [
		'ss_servquesanswer_name' => 'name',
		'ss_servquesanswer_price' => 'name',
		'ss_servquesanswer_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servquesanswer_inactive' => 0
	];
	public $engine = [
		'MySQLi' => 'InnoDB'
	];

	public $cache = false;
	public $cache_tags = [];
	public $cache_memory = false;

	public $data_asset = [
		'classification' => 'client_confidential',
		'protection' => 2,
		'scope' => 'enterprise'
	];
}