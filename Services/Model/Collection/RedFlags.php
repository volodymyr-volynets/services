<?php

namespace Numbers\Services\Services\Model\Collection;
class RedFlags extends \Object\Collection {
	public $data = [
		'name' => 'Red Flags',
		'model' => '\Numbers\Services\Services\Model\Service\RedFlags',
		'details' => [
			'\Numbers\Services\Services\Model\Service\RedFlag\Services' => [
				'name' => 'Services',
				'pk' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_servredflag_id', 'ss_servrdflgserv_service_id'],
				'type' => '1M',
				'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgserv_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgserv_servredflag_id']
			],
			'\Numbers\Services\Services\Model\Service\RedFlag\Statuses' => [
				'name' => 'Statuses',
				'pk' => ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servredflag_id', 'ss_servrdflgstatus_servstatus_code'],
				'type' => '1M',
				'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgstatus_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgstatus_servredflag_id']
			]
		]
	];
}