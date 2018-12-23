<?php

namespace Numbers\Services\Services\Form;
class Services extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_services';
	public $module_code = 'SS';
	public $title = 'S/S Services Form';
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
		'alt_names_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 2,
			'details_key' => '\Numbers\Services\Services\Model\Service\AltNames',
			'details_pk' => ['ss_servaltname_name'],
			'order' => 35001,
			'acl_subresource_edit' => ['SS::ALT_NAMES']
		],
	];
	public $rows = [
		'tabs' => [
			'general' => ['order' => 100, 'label_name' => 'General'],
			'alt_names' => ['order' => 200, 'label_name' => 'Alt. Names', 'acl_subresource_hide' => ['SS::ALT_NAMES']],
			\Numbers\Tenants\Widgets\Attributes\Base::ATTRIBUTES => \Numbers\Tenants\Widgets\Attributes\Base::ATTRIBUTES_DATA + ['acl_subresource_hide' => ['SS::SERVICE_ATTRIBUTES']],
		],
	];
	public $elements = [
		'top' => [
			'ss_service_id' => [
				'ss_service_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service #', 'domain' => 'service_id_sequence', 'percent' => 50, 'navigation' => true],
				'ss_service_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 45, 'navigation' => true],
				'ss_service_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_service_name' => [
				'ss_service_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
		],
		'tabs' => [
			'general' => [
				'general' => ['container' => 'general_container', 'order' => 100],
			],
			'alt_names' => [
				'alt_names' => ['container' => 'alt_names_container', 'order' => 100],
			],
		],
		'general_container' => [
			'ss_service_organization_id' => [
				'ss_service_organization_id' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Organization', 'domain' => 'organization_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'options_params' => ['on_organization_subtype_id' => 10], 'onchange' => 'this.form.submit();'],
				'ss_service_category_id' => ['order' => 2, 'label_name' => 'Category', 'domain' => 'category_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Categories::optionsActive', 'options_depends' => ['ss_servcategory_organization_id' => 'ss_service_organization_id']],
			],
			'ss_service_type_code' => [
				'ss_service_type_code' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'placeholder' => 'Type', 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Types::optionsActive', 'onchange' => 'this.form.submit();'],
				'ss_service_assignment_type_id' => ['order' => 2, 'label_name' => 'Assignment Type', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Assignment\Types'],
			],
			'ss_service_queue_type_id' => [
				'ss_service_queue_type_id' => ['order' => 1, 'row_order' => 500, 'label_name' => 'Queue Type', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 25, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Queue\Types::optionsActive'],
				'ss_service_service_script_id' => ['order' => 2, 'label_name' => 'Service Script #', 'domain' => 'service_script_id', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\ServiceScripts::optionsActive', 'options_params' => ['ss_servscript_versioned' => 1]],
				'ss_service_billable' => ['order' => 3, 'label_name' => 'Billable', 'type' => 'boolean'],
			],
			'ss_service_icon' => [
				'ss_service_icon' => ['order' => 1, 'row_order' => 600, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
			],
		],
		'alt_names_container' => [
			'row1' => [
				'ss_servaltname_name' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Name', 'domain' => 'name', 'null' => true, 'required' => true, 'percent' => 95, 'onblur' => 'this.form.submit();'],
				'ss_servaltname_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5],
			]
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Services',
		'model' => '\Numbers\Services\Services\Model\Services',
		'details' => [
			'\Numbers\Services\Services\Model\Service\AltNames' => [
				'name' => 'Alt Names',
				'pk' => ['ss_servaltname_tenant_id', 'ss_servaltname_service_id', 'ss_servaltname_name'],
				'type' => '1M',
				'map' => ['ss_service_tenant_id' => 'ss_servaltname_tenant_id', 'ss_service_id' => 'ss_servaltname_service_id']
			],
		]
	];
}