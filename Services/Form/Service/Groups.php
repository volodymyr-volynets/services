<?php

namespace Numbers\Services\Services\Form\Service;
class Groups extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_service_type_groups';
	public $module_code = 'SS';
	public $title = 'S/S Service Type Groups Form';
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
			'ss_servtpgrp_code' => [
				'ss_servtpgrp_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Group Code', 'domain' => 'group_code', 'placeholder' => 'Group', 'required' => true, 'percent' => 95, 'navigation' => true],
				'ss_servtpgrp_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_servtpgrp_name' => [
				'ss_servtpgrp_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
			'ss_servtpgrp_icon' => [
				'ss_servtpgrp_icon' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
				'ss_servtpgrp_order' => ['order' => 2, 'label_name' => 'Order', 'domain' => 'order', 'null' => true, 'required' => true, 'percent' => 50],
			],
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Groups',
		'model' => '\Numbers\Services\Services\Model\Service\Type\Groups'
	];
}