<?php

namespace Numbers\Services\Services\Form\Grant;
class GrantServiceCustomerLocation extends \Object\Form\Wrapper\Base {
	public $form_link = 'um_grant_service_customer_locations';
	public $module_code = 'UM';
	public $title = 'U/M Grant Service Customer Locations Form';
	public $options = [
		'segment' => [
			'type' => 'primary',
			'header' => [
				'icon' => ['type' => 'fas fa-pen-square'],
				'title' => 'Grant Service Customer Locations:'
			]
		],
		'actions' => [
			'refresh' => true,
		],
		'no_ajax_form_reload' => true
	];
	public $containers = [
		'top' => ['default_row_type' => 'grid', 'order' => 100],
		'grant' => ['default_row_type' => 'grid', 'order' => 200],
		'buttons' => ['default_row_type' => 'grid', 'order' => 900],
	];
	public $rows = [];
	public $elements = [
		'top' => [
			'user_id' => [
				'user_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'User', 'domain' => 'user_id', 'null' => true, 'required' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Users\Users\Model\Aliases\Users::optionsActive'],
			],
			'organization_id' => [
				'organization_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Organizations', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'searchable' => true, 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGrouped', 'onchange' => 'this.form.submit();'],
				'customer_id' => ['order' => 2, 'label_name' => 'Customer', 'domain' => 'customer_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Customers::optionsActive', 'options_depends' => ['on_customer_organization_id' => 'organization_id'], 'onchange' => 'this.form.submit();'],
			],
			'service_id' => [
				'service_ids' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Service(s)', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 100, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Numbers\Services\Services\Model\Services::optionsActive'],
			]
		],
		'buttons' => [
			self::BUTTONS => [
				self::BUTTON_SUBMIT => ['value' => 'Grant'] + self::BUTTON_SUBMIT_SAVE_DATA,
			]
		]
	];
	public $collection = [];
	public $notification = [];
	public $job;

	public function validate(& $form) {
		if ($form->hasErrors()) return;
		// fetch all active locations
		$locations = \Numbers\Users\Organizations\Model\Locations::getStatic([
			'where' => [
				'on_location_organization_id' => $form->values['organization_id'],
				'on_location_customer_id' => $form->values['customer_id'],
				'on_location_inactive' => 0,
			],
			'pk' => ['on_location_id'],
			'columns' => ['on_location_id', 'on_location_name']
		]);
		if (empty($locations)) {
			$form->error(DANGER, \Object\Content\Messages::NO_WHAT_FOUND, '', ['replace' => ['[what]' => i18n(null, 'Locations')]]);
			return;
		}
		$locations_fixed = [];
		foreach ($locations as $k => $v) {
			$locations_fixed[] = [
				'ss_servcustlmap_location_id' => $k,
				'ss_servcustlmap_inactive' => 0
			];
		}
		// go through all services
		set_time_limit(0);
		$model = new \Numbers\Services\Services\Model\Collection\ServiceCustomerLocation();
		$model->primary_model->db_object->begin();
		$counter = 0;
		foreach ($form->values['service_ids'] as $k => $v) {
			// service might not have organization assignment
			$service_organizaiton_result = \Numbers\Services\Services\Model\Service\Organizations::collectionStatic()->merge([
				'ss_servorg_tenant_id' => \Tenant::id(),
				'ss_servorg_service_id' => $k,
				'ss_servorg_organization_id' => $form->values['organization_id'],
				'ss_servorg_inactive' => 0
			]);
			if (!$service_organizaiton_result['success']) {
				$form->error(DANGER, $service_organizaiton_result['error']);
				$model->primary_model->db_object->rollback();
				return;
			}
			$collection_result = $model->merge([
				'ss_servcustloc_user_id' => $form->values['user_id'],
				'ss_servcustloc_organization_id' => $form->values['organization_id'],
				'ss_servcustloc_service_id' => $k,
				'ss_servcustloc_customer_id' => $form->values['customer_id'],
				'\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map' => $locations_fixed
			]);
			if (!$collection_result['success']) {
				$form->error(DANGER, $collection_result['error']);
				$model->primary_model->db_object->rollback();
				return;
			}
			$counter+= $collection_result['count'];
		}
		$model->primary_model->db_object->commit();
		$form->error(SUCCESS, \Object\Content\Messages::OPERATION_EXECUTED);
		$form->error(SUCCESS, 'Granted [locations].', null, ['replace' => ['[locations]' => $counter]]);
	}
}