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
		'invoicing_container' => ['default_row_type' => 'grid', 'order' => 32001],
		'organizations_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Service\Organizations',
			'details_pk' => ['ss_servorg_organization_id'],
			'required' => true,
			'order' => 35001,
			'acl_subresource_edit' => ['SS::SERVICE_ORGANIZATIONS']
		],
		'alt_names_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 2,
			'details_key' => '\Numbers\Services\Services\Model\Service\AltNames',
			'details_pk' => ['ss_servaltname_name'],
			'order' => 35001,
			'acl_subresource_edit' => ['SS::SERVICE_ALT_NAMES']
		],
		'channels_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Service\Channel\Map',
			'details_pk' => ['ss_servchanmap_channel_id'],
			'order' => 35001,
			'acl_subresource_edit' => ['SS::SERVICE_CHANNELS']
		],
		'pricing_container' => [
			'type' => 'details',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_key' => '\Numbers\Services\Services\Model\Service\Pricing',
			'details_pk' => ['ss_servprice_currency_code'],
			'order' => 35002,
			'acl_subresource_edit' => ['SS::SERVICE_PRICING']
		],
		'markups_container' => [
			'label_name' => 'Markups',
			'type' => 'subdetails',
			'details_rendering_type' => 'table',
			'details_new_rows' => 1,
			'details_parent_key' => '\Numbers\Services\Services\Model\Service\Pricing',
			'details_key' => '\Numbers\Services\Services\Model\Service\Price\Markups',
			'details_pk' => ['ss_servprcmarkup_detail_id'],
			'details_autoincrement' => ['ss_servprcmarkup_detail_id'],
			'order' => 35003
		],
	];
	public $rows = [
		'tabs' => [
			'general' => ['order' => 100, 'label_name' => 'General'],
			'organizations' => ['order' => 150, 'label_name' => 'Organizations', 'acl_subresource_hide' => ['SS::SERVICE_ORGANIZATIONS']],
			'alt_names' => ['order' => 200, 'label_name' => 'Alt. Names', 'acl_subresource_hide' => ['SS::SERVICE_ALT_NAMES']],
			'channels' => ['order' => 300, 'label_name' => 'Channels', 'acl_subresource_hide' => ['SS::SERVICE_CHANNELS']],
			'pricing' => ['order' => 400, 'label_name' => 'Pricing', 'acl_subresource_hide' => ['SS::SERVICE_PRICING']],
			'invoicing' => ['order' => 500, 'label_name' => 'Invoicing', 'acl_subresource_hide' => ['SS::SERVICE_PRICING']],
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
			'organizations' => [
				'organizations' => ['container' => 'organizations_container', 'order' => 100],
			],
			'alt_names' => [
				'alt_names' => ['container' => 'alt_names_container', 'order' => 100],
			],
			'channels' => [
				'channels' => ['container' => 'channels_container', 'order' => 100],
			],
			'pricing' => [
				'pricing' => ['container' => 'pricing_container', 'order' => 100],
			],
			'invoicing' => [
				'invoicing' => ['container' => 'invoicing_container', 'order' => 100],
			]
		],
		'general_container' => [
			'ss_service_category_id' => [
				'ss_service_category_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Category', 'domain' => 'category_id', 'null' => true, 'required' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Categories::optionsActive'],
			],
			'ss_service_type_code' => [
				'ss_service_type_code' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'placeholder' => 'Type', 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Types::optionsActive', 'onchange' => 'this.form.submit();'],
				'ss_service_assignment_type_id' => ['order' => 2, 'label_name' => 'Assignment Type', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Assignment\Types'],
			],
			'ss_service_queue_type_id' => [
				'ss_service_queue_type_id' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Queue Type', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Queue\Types::optionsActive'],
				'ss_service_service_script_id' => ['order' => 2, 'label_name' => 'Service Script #', 'domain' => 'service_script_id', 'null' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\ServiceScripts::optionsActive', 'options_params' => ['ss_servscript_versioned' => 1]],
			],
			'ss_service_icon' => [
				'ss_service_icon' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Icon', 'domain' => 'icon', 'null' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Frontend\HTML\FontAwesome\Model\Icons::options', 'searchable' => true],
			],
		],
		'organizations_container' => [
			'row1' => [
				'ss_servorg_organization_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Organization', 'domain' => 'organization_id', 'required' => true, 'null' => true, 'details_unique_select' => true, 'percent' => 95, 'method' => 'select', 'tree' => true, 'options_model' => '\Numbers\Users\Organizations\Model\Organizations::optionsGroupedActive', 'options_params' => ['on_organization_subtype_id' => 10], 'onchange' => 'this.form.submit();'],
				'ss_servorg_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
			]
		],
		'invoicing_container' => [
			'ss_service_invoicing_details' => [
				'ss_service_invoicing_details' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Invoicing Details', 'domain' => 'description', 'null' => true, 'method' => 'textarea'],
			],
			'ss_service_master_invoice' => [
				'ss_service_master_invoice' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Master Invoice', 'type' => 'boolean'],
				'ss_service_billable' => ['order' => 2, 'label_name' => 'Billable', 'type' => 'boolean'],
			]
		],
		'alt_names_container' => [
			'row1' => [
				'ss_servaltname_name' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Name', 'domain' => 'name', 'null' => true, 'required' => true, 'percent' => 95, 'onblur' => 'this.form.submit();'],
				'ss_servaltname_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5],
			]
		],
		'channels_container' => [
			'row1' => [
				'ss_servchanmap_channel_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Channel', 'domain' => 'channel_id', 'null' => true, 'required' => true, 'percent' => 95, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Channels::optionsActive', 'onchange' => 'this.form.submit();'],
				'ss_servchanmap_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5],
			]
		],
		'pricing_container' => [
			'row1' => [
				'ss_servprice_currency_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Currency', 'domain' => 'currency_code', 'null' => true, 'required' => true, 'percent' => 50, 'details_unique_select' => true, 'method' => 'select', 'options_model' => '\Numbers\Countries\Currencies\Model\Currencies::optionsActive', 'onchange' => 'this.form.submit();'],
				'ss_servprice_cost_amount' => ['order' => 2, 'label_name' => 'Cost Amount', 'domain' => 'amount', 'null' => true, 'required' => true, 'percent' => 25, 'format_depends' => ['currency_code' => 'ss_servprice_currency_code']],
				'ss_servprice_cost_minimum' => ['order' => 3, 'label_name' => 'Minimum Cost', 'domain' => 'amount', 'null' => true, 'percent' => 20, 'format_depends' => ['currency_code' => 'ss_servprice_currency_code']],
				'ss_servprice_inactive' => ['order' => 4, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5],
			]
		],
		'markups_container' => [
			'row1' => [
				'ss_servprcmarkup_under_amount' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Under Amount', 'domain' => 'amount', 'default' => '0.00', 'null' => true, 'required' => true, 'percent' => 25, 'format_depends' => ['currency_code' => 'detail::ss_servprice_currency_code']],
				'ss_servprcmarkup_type_id' => ['order' => 2, 'label_name' => 'Type', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Price\Types', 'onchange' => 'this.form.submit();'],
				'ss_servprcmarkup_markup' => ['order' => 3, 'label_name' => 'Markup', 'domain' => 'amount', 'default' => '0.00', 'null' => true, 'required' => 'c', 'percent' => 25, 'format_depends' => ['currency_code' => 'detail::ss_servprice_currency_code']],
			],
			self::HIDDEN => [
				'ss_servprcmarkup_detail_id' => ['label_name' => 'Detail #', 'domain' => 'group_id', 'default' => 0, 'null' => true, 'method' => 'hidden'],
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
			'\Numbers\Services\Services\Model\Service\Organizations' => [
				'name' => 'Organizations',
				'pk' => ['ss_servorg_tenant_id', 'ss_servorg_service_id', 'ss_servorg_organization_id'],
				'type' => '1M',
				'map' => ['ss_service_tenant_id' => 'ss_servorg_tenant_id', 'ss_service_id' => 'ss_servorg_service_id']
			],
			'\Numbers\Services\Services\Model\Service\AltNames' => [
				'name' => 'Alt Names',
				'pk' => ['ss_servaltname_tenant_id', 'ss_servaltname_service_id', 'ss_servaltname_name'],
				'type' => '1M',
				'map' => ['ss_service_tenant_id' => 'ss_servaltname_tenant_id', 'ss_service_id' => 'ss_servaltname_service_id']
			],
			'\Numbers\Services\Services\Model\Service\Channel\Map' => [
				'name' => 'Channels',
				'pk' => ['ss_servchanmap_tenant_id', 'ss_servchanmap_service_id', 'ss_servchanmap_channel_id'],
				'type' => '1M',
				'map' => ['ss_service_tenant_id' => 'ss_servchanmap_tenant_id', 'ss_service_id' => 'ss_servchanmap_service_id']
			],
			'\Numbers\Services\Services\Model\Service\Pricing' => [
				'name' => 'Pricing',
				'pk' => ['ss_servprice_tenant_id', 'ss_servprice_service_id', 'ss_servprice_currency_code'],
				'type' => '1M',
				'map' => ['ss_service_tenant_id' => 'ss_servprice_tenant_id', 'ss_service_id' => 'ss_servprice_service_id'],
				'details' => [
					'\Numbers\Services\Services\Model\Service\Price\Markups' => [
						'name' => 'Markups',
						'pk' => ['ss_servprcmarkup_tenant_id', 'ss_servprcmarkup_service_id', 'ss_servprcmarkup_currency_code', 'ss_servprcmarkup_detail_id'],
						'type' => '1M',
						'map' => ['ss_servprice_tenant_id' => 'ss_servprcmarkup_tenant_id', 'ss_servprice_service_id' => 'ss_servprcmarkup_service_id', 'ss_servprice_currency_code' => 'ss_servprcmarkup_currency_code'],
					]
				]
			],
		]
	];

	public function overrideFieldValue(& $form, & $options, & $value, & $neighbouring_values) {
		if ($options['options']['field_name'] == 'ss_servprcmarkup_markup') {
			if (empty($neighbouring_values['ss_servprcmarkup_type_id']) || $neighbouring_values['ss_servprcmarkup_type_id'] == 20) {
				$options['options']['format'] = 'number';
			}
		}
	}
}