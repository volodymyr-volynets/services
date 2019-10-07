<?php

namespace Numbers\Services\Services\Model\Collection;
class Workflows extends \Object\Collection {
	public $data = [
		'name' => 'Workflows',
		'model' => '\Numbers\Services\Services\Model\Workflows',
		'details' => [
			'\Numbers\Services\Services\Model\Workflow\Steps' => [
				'name' => 'Steps',
				'pk' => ['ss_servworkstep_tenant_id', 'ss_servworkstep_servworkflow_code', 'ss_servworkstep_parent_servstatus_code', 'ss_servworkstep_child_servstatus_code'],
				'type' => '1M',
				'map' => ['ss_servworkflow_tenant_id' => 'ss_servworkstep_tenant_id', 'ss_servworkflow_code' => 'ss_servworkstep_servworkflow_code']
			],
		]
	];
}