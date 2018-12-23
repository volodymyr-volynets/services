<?php

namespace Numbers\Services\Services\Form;
class DispositionCodes extends \Object\Form\Wrapper\Base {
	public $form_link = 'ss_disposition_codes';
	public $module_code = 'SS';
	public $title = 'S/S Disposition Codes Form';
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
		'organization_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Disposition\Organizations',
			'details_pk' => ['ss_disporg_organization_id'],
			'order' => 35001,
			'required' => true,
		],
		'roles_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Disposition\Roles',
			'details_pk' => ['ss_disprol_role_id'],
			'order' => 35002,
			'required' => true,
		],
	];
	public $rows = [
		'tabs' => [
			'general' => ['order' => 100, 'label_name' => 'General'],
			'organizations' => ['order' => 200, 'label_name' => 'Organizations'],
			'roles' => ['order' => 300, 'label_name' => 'Roles'],
		],
	];
	public $elements = [
		'top' => [
			'ss_disposition_id' => [
				'ss_disposition_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Disposition #', 'domain' => 'disposition_id_sequence', 'percent' => 50, 'navigation' => true],
				'ss_disposition_code' => ['order' => 2, 'label_name' => 'Code', 'domain' => 'group_code', 'required' => true, 'percent' => 45, 'navigation' => true],
				'ss_disposition_inactive' => ['order' => 3, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			],
			'ss_disposition_name' => [
				'ss_disposition_name' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Name', 'domain' => 'name', 'percent' => 100, 'required' => true],
			],
		],
		'tabs' => [
			'general' => [
				'general' => ['container' => 'general_container', 'order' => 100],
			],
			'organizations' => [
				'organizations' => ['container' => 'organization_container', 'order' => 100],
			],
			'roles' => [
				'roles' => ['container' => 'roles_container', 'order' => 100],
			]
		],
		'general_container' => [
			'ss_disposition_type_code' => [
				'ss_disposition_type_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 100, 'placeholder' => 'Type', 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Disposition\Types'],
			],
			'ss_disposition_icon' => [
				'ss_disposition_icon' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
			],
		],
		'organization_container' => [
			'row1' => [
				'ss_disporg_organization_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Organization', 'domain' => 'organization_id', 'required' => true, 'null' => true, 'details_unique_select' => true, 'percent' => 80, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'options_params' => ['on_organization_subtype_id' => 10], 'onchange' => 'this.form.submit();'],
				'ss_disporg_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5],
			]
		],
		'roles_container' => [
			'row1' => [
				'ss_disprol_role_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Role', 'domain' => 'role_id', 'required' => true, 'null' => true, 'details_unique_select' => true, 'percent' => 95, 'method' => 'select', 'options_model' => '\Numbers\Users\Users\DataSource\Roles', 'onchange' => 'this.form.submit();'],
				'ss_disprol_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			]
		],
		'buttons' => [
			self::BUTTONS => self::BUTTONS_DATA_GROUP
		]
	];
	public $collection = [
		'name' => 'Disposition Codes',
		'model' => '\Numbers\Services\Services\Model\Disposition\Codes',
		'details' => [
			'\Numbers\Services\Services\Model\Disposition\Organizations' => [
				'name' => 'Disposition Organizations',
				'pk' => ['ss_disporg_tenant_id', 'ss_disporg_disposition_id', 'ss_disporg_organization_id'],
				'type' => '1M',
				'map' => ['ss_disposition_tenant_id' => 'ss_disporg_tenant_id', 'ss_disposition_id' => 'ss_disporg_disposition_id']
			],
			'\Numbers\Services\Services\Model\Disposition\Roles' => [
				'name' => 'Disposition Roles',
				'pk' => ['ss_disprol_tenant_id', 'ss_disprol_disposition_id', 'ss_disprol_role_id'],
				'type' => '1M',
				'map' => ['ss_disposition_tenant_id' => 'ss_disprol_tenant_id', 'ss_disposition_id' => 'ss_disprol_disposition_id']
			]
		]
	];

	public function processOptionsModels(& $form, $field_name, $details_key, $details_parent_key, & $where, $neighbouring_values, $details_value) {
		if ($field_name == 'ss_disprol_role_id') {
			$where['selected_organizations'] = array_extract_values_by_key($form->values['\Numbers\Services\Services\Model\Disposition\Organizations'], 'ss_disporg_organization_id', ['unique' => true]);
		}
	}
}