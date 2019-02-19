<?php

namespace Numbers\Services\Services\Form\Assignment;
class ServiceCustomerLocation extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_service_customer_location';
	public $module_code = 'SS';
	public $title = 'S/S Service Customer Location Form';
	public $options = [
		'segment' => self::SEGMENT_FORM,
		'actions' => [
			'refresh' => true,
			'new' => true,
			'back' => true,
		],
	];
	public $containers = [
		'top' => ['default_row_type' => 'grid', 'order' => 100],
		'buttons' => ['default_row_type' => 'grid', 'order' => 900],
		'locations_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map',
			'details_pk' => ['ss_servcustlmap_location_id'],
			'required' => true,
			'order' => 200,
		],
	];
	public $rows = [];
	public $elements = [
		'top' => [
			'ss_servcustloc_user_id' => [
				'ss_servcustloc_user_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'User', 'domain' => 'user_id', 'null' => true, 'required' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Users\Users\Model\Users::optionsActive', 'onchange' => 'this.form.submit();'],
			],
			'ss_servcustloc_customer_organization_id' => [
				'ss_servcustloc_organization_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Organization', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'options_params' => ['on_organization_subtype_id' => 10], 'onchange' => 'this.form.submit();'],
				'ss_servcustloc_customer_organization_id' => ['order' => 2, 'label_name' => 'Customer', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsActive', 'options_depends' => ['on_organization_parent_organization_id' => 'ss_servcustloc_organization_id'], 'options_params' => ['on_organization_subtype_id' => 20], 'onchange' => 'this.form.submit();'],
			],
			'ss_servcustloc_service_id' => [
				'ss_servcustloc_service_id' => ['order' => 1, 'row_order' => 300, 'order_for_defaults' => -31050, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Mirabelli\JobManagement\DataSource\Services::optionsActive', 'options_depends' => ['selected_organizations' => 'ss_servcustloc_organization_id', 'customer_organization_id' => 'ss_servcustloc_customer_organization_id'], 'onchange' => 'this.form.submit();'],
			],
			'ss_servcustloc_priority_percent' => [
				'ss_servcustloc_priority_percent' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Priority Percent', 'domain' => 'amount', 'null' => true, 'format' => '\Format::number'],
				'ss_servcustloc_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean'],
			],
		],
		'locations_container' => [
			'row1' => [
				'ss_servcustlmap_location_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Location', 'domain' => 'location_id', 'null' => true, 'required' => true, 'percent' => 95, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Locations::optionsActive', 'options_depends' => ['on_location_organization_id' => 'parent::ss_servcustloc_organization_id', 'on_location_customer_organization_id' => 'parent::ss_servcustloc_customer_organization_id'], 'onchange' => 'this.form.submit();'],
				'ss_servcustlmap_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			]
		],
		'buttons' => [
			self::BUTTONS => [
				self::BUTTON_SUBMIT_SAVE => self::BUTTON_SUBMIT_SAVE_DATA,
				self::BUTTON_SUBMIT_DELETE => self::BUTTON_SUBMIT_DELETE_DATA,
			]
		]
	];
	public $collection = [
		'name' => 'Assignments',
		'pk' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id', 'ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_organization_id'],
		'model' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations',
		'details' => [
			'\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map' => [
				'name' => 'Assignment Locations',
				'pk' => ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_organization_id', 'ss_servcustlmap_location_id'],
				'type' => '1M',
				'map' => ['ss_servcustloc_tenant_id' => 'ss_servcustlmap_tenant_id', 'ss_servcustloc_user_id' => 'ss_servcustlmap_user_id', 'ss_servcustloc_organization_id' => 'ss_servcustlmap_organization_id', 'ss_servcustloc_service_id' => 'ss_servcustlmap_service_id', 'ss_servcustloc_customer_organization_id' => 'ss_servcustlmap_customer_organization_id'],
			]
		]
	];

	public function validate(& $form) {
		$ids = \Numbers\Services\Services\DataSource\ServiceScript\PreloadIDs::getStatic([
			'where' => [
				'service_id' => $form->values['ss_servcustloc_service_id']
			]
		]);
		if ($ids['queue_method_id'] == 20) {
			if (\Math::compare($v['ss_servcustloc_priority_percent'], '0', 2) == 0) {
				$form->error(DANGER, \Object\Content\Messages::REQUIRED_FIELD, "ss_servcustloc_priority_percent");
			}
		}
	}
}