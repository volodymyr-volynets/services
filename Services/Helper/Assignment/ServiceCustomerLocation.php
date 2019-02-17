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
			],
			'max_records' => 5000, // duplicated on purpose
		];
		$parent->containers['service_customer_location_assignment_container'] = [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations',
			'details_pk' => ['ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_organization_id'],
			'order' => 35005,
			'details_max_records_warning_message' => \Numbers\Services\Services\Helper\Messages::ASSIGNMENT_MAX_ROWS,
			'details_max_records' => 5000, // duplicated on purpose
		];
		$parent->rows['assignment_tabs']['assignment_tabs_service_customer_location'] = ['order' => 200, 'label_name' => 'Customer / Location', 'acl_subresource_hide' => ['SS::USER_SERVCUSTLOCASSIGN']];
		$parent->elements['assignment_tabs']['assignment_tabs_service_customer_location']['assignment_tabs_service_customer_location'] = ['container' => 'service_customer_location_assignment_container', 'order' => 100];
		$parent->elements['service_customer_location_assignment_container'] = [
			'row1' => [
				'ss_servcustloc_customer_organization_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Customer', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'tree' => true, 'searchable' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsJsonActiveCustomers', 'options_options' => ['show_all' => true], 'onchange' => 'this.form.submit();', 'json_contains' => ['parent_id' => 'ss_servcustloc_organization_id', 'customer_organization_id' => 'ss_servcustloc_customer_organization_id']],
				'ss_servcustloc_service_id' => ['order' => 2, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 45, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\DataSource\Services::optionsActive', 'options_depends' => ['selected_organizations' => 'ss_servcustloc_organization_id'], 'options_params' => ['ss_service_assignment_type_id' => 30]],
				'ss_servcustloc_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'row3' => [
				'\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Location(s)', 'domain' => 'location_id', 'null' => true, 'required' => true, 'multiple_column' => 'ss_servcustlmap_location_id', 'percent' => 85, 'method' => 'multiselect', 'searchable' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Locations::optionsActive', 'options_depends' => ['on_location_customer_organization_id' => 'ss_servcustloc_customer_organization_id']],
				'ss_servcustloc_priority_percent' => ['order' => 2, 'label_name' => 'Priority %', 'domain' => 'amount', 'null' => true, 'required' => 'c', 'percent' => 15, 'format' => '\Format::number'],
			],
			\Object\Form\Parent2::HIDDEN => [
				'ss_servcustloc_organization_id' => ['order_for_defaults' => -32000, 'label_name' => 'Primary Organization', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'method' => 'hidden'],
			]
		];
	}

	public function validate(& $form) {
		// validate priority %
		foreach ($form->values['\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations'] as $k => $v) {
			if (empty($v['ss_servcustloc_service_id'])) continue;
			$ids = \Numbers\Services\Services\DataSource\ServiceScript\PreloadIDs::getStatic([
				'where' => [
					'service_id' => $v['ss_servcustloc_service_id']
				]
			]);
			if ($ids['queue_method_id'] == 20) {
				if (\Math::compare($v['ss_servcustloc_priority_percent'], '0', 2) == 0) {
					$form->error(DANGER, \Object\Content\Messages::REQUIRED_FIELD, "\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations[{$k}][ss_servcustloc_priority_percent]");
				}
			}
		}
	}
}