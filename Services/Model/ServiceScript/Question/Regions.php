<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class Regions extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Script Regions';
	public $schema;
	public $name = 'ss_service_script_question_regions';
	public $pk = ['ss_servquesregion_tenant_id', 'ss_servquesregion_service_script_id', 'ss_servquesregion_question_id', 'ss_servquesregion_region_id'];
	public $tenant = true;
	public $orderby = [
		'ss_servquesregion_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servquesregion_';
	public $columns = [
		'ss_servquesregion_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servquesregion_service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id'],
		'ss_servquesregion_question_id' => ['name' => 'Question #', 'domain' => 'question_id'],
		'ss_servquesregion_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servquesregion_region_id' => ['name' => 'Region #', 'domain' => 'region_id'],
		'ss_servquesregion_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_script_question_regions_pk' => ['type' => 'pk', 'columns' => ['ss_servquesregion_tenant_id', 'ss_servquesregion_service_script_id', 'ss_servquesregion_question_id', 'ss_servquesregion_region_id']],
		'ss_servquesregion_question_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servquesregion_tenant_id', 'ss_servquesregion_service_script_id', 'ss_servquesregion_question_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\ServiceScript\Questions',
			'foreign_columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_id']
		],
		'ss_servquesregion_region_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servquesregion_tenant_id', 'ss_servquesregion_region_id'],
			'foreign_model' => '\Numbers\Users\Organizations\Model\Regions',
			'foreign_columns' => ['on_region_tenant_id', 'on_region_id']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = false;
	public $optimistic_lock = false;
	public $options_map = [];
	public $options_active = [];
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