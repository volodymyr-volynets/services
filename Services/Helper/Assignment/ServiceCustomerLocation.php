<?php

namespace Numbers\Services\Services\Helper\Assignment;
class ServiceCustomerLocation {

	/**
	 * Constructor
	 *
	 * @param \Object\Form\Base $form
	 */
	public function __construct(\Object\Form\Wrapper\Base & $parent) {
		$parent->collection['details']['\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations'] = [
			'name' => 'Service Customer Location Assignments',
			'pk' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id', 'ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_organization_id'],
			'type' => '1M',
			'map' => ['um_user_tenant_id' => 'ss_servcustloc_tenant_id', 'um_user_id' => 'ss_servcustloc_user_id'],
			'details' => [
				'\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map' => [
					'name' => 'Service Customer Location Map Assignments',
					'pk' => ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_organization_id', 'ss_servcustlmap_location_id'],
					'type' => '1M',
					'map' => ['ss_servcustloc_tenant_id' => 'ss_servcustlmap_tenant_id', 'ss_servcustloc_user_id' => 'ss_servcustlmap_user_id', 'ss_servcustloc_organization_id' => 'ss_servcustlmap_organization_id', 'ss_servcustloc_service_id' => 'ss_servcustlmap_service_id', 'ss_servcustloc_customer_organization_id' => 'ss_servcustlmap_customer_organization_id'],
				]
			]
		];
		$parent->containers['service_customer_location_assignment_container'] = [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations',
			'details_pk' => ['ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_organization_id'],
			'order' => 35005
		];
		$parent->rows['assignment_tabs']['assignment_tabs_service_customer_location'] = ['order' => 200, 'label_name' => 'Customer / Location', 'acl_subresource_hide' => ['SS::USER_SERVCUSTLOCASSIGN']];
		$parent->elements['assignment_tabs']['assignment_tabs_service_customer_location']['assignment_tabs_service_customer_location'] = ['container' => 'service_customer_location_assignment_container', 'order' => 100];
		$parent->elements['service_customer_location_assignment_container'] = [
			'row1' => [
				'ss_servcustloc_organization_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Primary Organization', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 95, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'options_params' => ['on_organization_subtype_id' => 10], 'onchange' => 'this.form.submit();'],
				'ss_servcustloc_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'row2' => [
				'ss_servcustloc_service_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Services::optionsActive', 'options_depends' => ['ss_service_organization_id' => 'ss_servcustloc_organization_id'], 'options_params' => ['ss_service_assignment_type_id' => 30], 'onchange' => 'this.form.submit();'],
				'ss_servcustloc_customer_organization_id' => ['order' => 2, 'label_name' => 'Customer Organization', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'options_depends' => ['on_organization_parent_organization_id' => 'ss_servcustloc_organization_id'], 'options_params' => ['on_organization_subtype_id' => 20], 'onchange' => 'this.form.submit();'],
			],
			'row3' => [
				'\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Location(s)', 'domain' => 'location_id', 'null' => true, 'required' => true, 'multiple_column' => 'ss_servcustlmap_location_id', 'percent' => 100, 'method' => 'multiselect', 'searchable' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Locations::optionsActive', 'options_depends' => ['on_location_customer_organization_id' => 'ss_servcustloc_customer_organization_id']],
			]
		];
	}
}