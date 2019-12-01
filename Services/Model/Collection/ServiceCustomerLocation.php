<?php

namespace Numbers\Services\Services\Model\Collection;
class ServiceCustomerLocation extends \Object\Collection {
	public $data = [
		'name' => 'Assignments',
		'pk' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id', 'ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_id'],
		'model' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations',
		'details' => [
			'\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map' => [
				'name' => 'Assignment Locations',
				'pk' => ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_id', 'ss_servcustlmap_location_id'],
				'type' => '1M',
				'map' => ['ss_servcustloc_tenant_id' => 'ss_servcustlmap_tenant_id', 'ss_servcustloc_user_id' => 'ss_servcustlmap_user_id', 'ss_servcustloc_organization_id' => 'ss_servcustlmap_organization_id', 'ss_servcustloc_service_id' => 'ss_servcustlmap_service_id', 'ss_servcustloc_customer_id' => 'ss_servcustlmap_customer_id'],
			]
		]
	];
}