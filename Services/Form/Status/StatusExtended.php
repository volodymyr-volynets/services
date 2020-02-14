<?php

namespace Numbers\Services\Services\Form\Status;
class StatusExtended extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_statuses';
	public $module_code = 'SS';
	public $title = 'S/S Statuses Form';
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
		'buttons' => ['default_row_type' => 'grid', 'order' => 900]
	];
	public $rows = [];
	public $elements = [
		'top' => [
			'ss_servstatex_code' => [
				'ss_servstatex_servstatus_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'onchange' => 'this.form.submit();'],
				'ss_servstatex_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 45, 'navigation' => ['depends' => ['ss_servstatex_servstatus_code']]],
				'ss_servstatex_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_servstatex_name' => [
				'ss_servstatex_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
				'ss_servstatex_weight' => ['order' => 3, 'label_name' => 'Weight', 'domain' => 'weight', 'null' => true, 'percent' => 20],
			],
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Statuses (Extended)',
		'model' => '\Numbers\Services\Services\Model\Service\StatusExtended'
	];
}