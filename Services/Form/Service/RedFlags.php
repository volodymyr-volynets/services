<?php

namespace Numbers\Services\Services\Form\Service;
class RedFlags extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_service_red_flags';
	public $module_code = 'SS';
	public $title = 'S/S Service Red Flags Form';
	public $options = [
		'segment' => self::SEGMENT_FORM,
		'actions' => [
			'refresh' => true,
			'back' => true,
			'new' => true,
			'import' => true
		]
	];
	public $containers = [
		'top' => ['default_row_type' => 'grid', 'order' => 100],
		'tabs' => ['default_row_type' => 'grid', 'order' => 500, 'type' => 'tabs'],
		'buttons' => ['default_row_type' => 'grid', 'order' => 900],
		'general_container' => ['default_row_type' => 'grid', 'order' => 32000],
		'all_services_container' => ['default_row_type' => 'grid', 'order' => 32000],
		'services_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Service\RedFlag\Services',
			'details_pk' => ['ss_servrdflgserv_service_id'],
			'order' => 35000,
		],
	];
	public $rows = [
		'tabs' => [
			'general' => ['order' => 100, 'label_name' => 'General'],
			'services' => ['order' => 200, 'label_name' => 'Services'],
		]
	];
	public $elements = [
		'top' => [
			'ss_servchannel_id' => [
				'ss_servredflag_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Red Flag #', 'domain' => 'group_id_sequence', 'percent' => 50, 'navigation' => true],
				'ss_servredflag_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 45, 'navigation' => true],
				'ss_servredflag_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_servredflag_name' => [
				'ss_servredflag_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
		],
		'tabs' => [
			'general' => [
				'general' => ['container' => 'general_container', 'order' => 100],
			],
			'services' => [
				'all_services' => ['container' => 'all_services_container', 'order' => 100],
				'services' => ['container' => 'services_container', 'order' => 200],
			],
		],
		'general_container' => [
			'ss_servredflag_servdatetype_code' => [
				'ss_servredflag_servdatetype_code' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Date Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\DateTypes::optionsActive'],
				'ss_servredflag_interval' => ['order' => 2, 'label_name' => 'Interval', 'type' => 'interval', 'null' => true, 'required' => true, 'percent' => 25, 'placeholder' => 'Days Hours:Minutes'],
				'ss_servredflag_business' => ['order' => 3, 'label_name' => 'Business Hours', 'type' => 'boolean', 'percent' => 25],
			],
			'ss_servredflag_servstatus_code' => [
				'ss_servredflag_servstatus_code' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_params' => ['ss_servstatus_red_flag' => 0]],
				'ss_servredflag_red_flag_servstatus_code' => ['order' => 3, 'label_name' => 'Red Flag Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_params' => ['ss_servstatus_red_flag' => 1]],
			],
			'ss_servredflag_where' => [
				'ss_servredflag_where' => ['order' => 1, 'row_order' => 500, 'label_name' => 'Where', 'type' => 'text', 'null' => true, 'percent' => 100, 'method' => 'textarea'],
			]
		],
		'all_services_container' => [
			'ss_servredflag_all_services' => [
				'ss_servredflag_all_services' => ['order' => 1, 'row_order' => 100, 'label_name' => 'All Services', 'type' => 'boolean'],
			]
		],
		'services_container' => [
			'row1' => [
				'ss_servrdflgserv_service_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 95, 'details_unique_select' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Services', 'onchange' => 'this.form.submit();'],
				'ss_servrdflgserv_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			]
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Red Flags',
		'model' => '\Numbers\Services\Services\Model\Service\RedFlags',
		'details' => [
			'\Numbers\Services\Services\Model\Service\RedFlag\Services' => [
				'name' => 'Services',
				'pk' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_servredflag_id', 'ss_servrdflgserv_service_id'],
				'type' => '1M',
				'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgserv_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgserv_servredflag_id']
			]
		]
	];

	public function validate(& $form) {
		if (empty($form->values['\Numbers\Services\Services\Model\Service\RedFlag\Services']) && empty($form->values['ss_servredflag_all_services'])) {
			$form->error(DANGER, \Object\Content\Messages::REQUIRED_FIELD, "\Numbers\Services\Services\Model\Service\RedFlag\Services[1][ss_servrdflgserv_service_id]");
		}
	}
}