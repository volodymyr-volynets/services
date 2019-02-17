<?php

namespace Numbers\Services\Services\Model\ServiceScript;
class Questions extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Script Questions';
	public $schema;
	public $name = 'ss_service_script_questions';
	public $pk = ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_id'];
	public $tenant = true;
	public $orderby = [
		'ss_servquestion_order' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servquestion_';
	public $columns = [
		'ss_servquestion_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servquestion_service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id'],
		'ss_servquestion_id' => ['name' => 'Question #', 'domain' => 'question_id'],
		'ss_servquestion_name' => ['name' => 'Name', 'domain' => 'description'],
		'ss_servquestion_order' => ['name' => 'Order', 'domain' => 'order'],
		'ss_servquestion_language_code' => ['name' => 'Language Code', 'domain' => 'language_code'],
		'ss_servquestion_type_code' => ['name' => 'Type', 'domain' => 'group_code', 'options_model' => '\Numbers\Services\Services\Model\ServiceScript\Question\Types'],
		'ss_servquestion_model_id' => ['name' => 'Model #', 'domain' => 'group_id', 'null' => true],
		'ss_servquestion_required' => ['name' => 'Required', 'type' => 'boolean'],
		'ss_servquestion_all_regions' => ['name' => 'All Regions', 'type' => 'boolean'],
		'ss_servquestion_all_channels' => ['name' => 'All Channels', 'type' => 'boolean'],
		'ss_servquestion_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_script_questions_pk' => ['type' => 'pk', 'columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_id']],
		'ss_servquestion_language_code_un' => ['type' => 'unique', 'columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_order', 'ss_servquestion_language_code']],
		'ss_servquestion_service_script_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\ServiceScripts',
			'foreign_columns' => ['ss_servscript_tenant_id', 'ss_servscript_id']
		],
		'ss_servquestion_language_code_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_language_code'],
			'foreign_model' => '\Numbers\Internalization\Internalization\Model\Language\Codes',
			'foreign_columns' => ['in_language_tenant_id', 'in_language_code']
		]
	];
	public $indexes = [
		'ss_service_script_questions_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servquestion_name']],
	];
	public $history = false;
	public $audit = false;
	public $optimistic_lock = false;
	public $options_map = [
		'ss_servquestion_name' => 'name',
		'ss_servquestion_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_servquestion_inactive' => 0
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