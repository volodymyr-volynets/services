<?php

namespace Numbers\Services\Services\DataSource;
class Services extends \Object\DataSource {
	public $db_link;
	public $db_link_flag;
	public $pk = ['ss_service_id'];
	public $columns;
	public $orderby;
	public $limit;
	public $single_row;
	public $single_value;
	public $options_map = [
		'ss_service_name' => 'name',
		'ss_service_inactive' => 'inactive'
	];
	public $options_active = [
		'ss_service_inactive' => 0
	];
	public $column_prefix = 'ss_service_';

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = false;

	public $primary_model = '\Numbers\Services\Services\Model\Services';
	public $parameters = [
		'selected_organizations' => ['name' => 'Selected Organizations', 'domain' => 'organization_id', 'multiple_column' => true],
		'existing_values' => ['name' => 'Existing Values', 'type' => 'mixed'],
	];

	public function query($parameters, $options = []) {
		$this->query->columns([
			'ss_service_id' => 'a.ss_service_id',
			'ss_service_name' => 'a.ss_service_name',
			'ss_service_inactive' => 'a.ss_service_inactive',
		]);
		// selected organizations
		if (!empty($parameters['selected_organizations'])) {
			$this->query->where('AND', function (& $query) use ($parameters) {
				// allow existing values
				if (!empty($parameters['existing_values'])) {
					$query->where('OR', ['a.ss_service_id', '=', $parameters['existing_values']]);
				}
				$query->where('OR', function (& $query) use ($parameters) {
					$query = \Numbers\Services\Services\Model\Service\Organizations::queryBuilderStatic(['alias' => 'inner_o'])->select();
					$query->columns(1);
					$query->where('AND', ['inner_o.ss_servorg_service_id', '=', 'a.ss_service_id', true]);
					$query->where('AND', ['inner_o.ss_servorg_organization_id', '=', $parameters['selected_organizations']]);
				}, true);
			});
		}
	}
}