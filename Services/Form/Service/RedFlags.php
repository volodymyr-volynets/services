<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Form\Service;

use Object\Content\Messages;
use Object\Form\Wrapper\Base;

class RedFlags extends Base
{
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
        'owners_container' => [
            'type' => 'details',
            'details_rendering_type' => 'table',
            'details_new_rows' => 1,
            'details_key' => '\Numbers\Services\Services\Model\Service\RedFlag\Owners',
            'details_pk' => ['ss_servrdflgowner_ownertype_id'],
            'order' => 35000,
        ],
        'statuses_container' => [
            'type' => 'details',
            'details_rendering_type' => 'table',
            'details_new_rows' => 1,
            'details_key' => '\Numbers\Services\Services\Model\Service\RedFlag\Statuses',
            'details_pk' => ['ss_servrdflgstatus_servstatus_code'],
            'order' => 35000,
        ],
    ];
    public $rows = [
        'tabs' => [
            'general' => ['order' => 100, 'label_name' => 'General'],
            'statuses' => ['order' => 150, 'label_name' => 'Statuses'],
            'services' => ['order' => 200, 'label_name' => 'Services'],
            'owners' => ['order' => 300, 'label_name' => 'Owners'],
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
            'statuses' => [
                'statuses' => ['container' => 'statuses_container', 'order' => 100],
            ],
            'services' => [
                'all_services' => ['container' => 'all_services_container', 'order' => 100],
                'services' => ['container' => 'services_container', 'order' => 200],
            ],
            'owners' => [
                'owners' => ['container' => 'owners_container', 'order' => 100],
            ],
        ],
        'general_container' => [
            'ss_servredflag_type_id' => [
                'ss_servredflag_type_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Type', 'domain' => 'type_id', 'null' => true, 'default' => 10, 'required' => true, 'method' => 'select', 'no_choose' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\RedFlag\Types', 'onchange' => 'this.form.submit();'],
            ],
            'ss_servredflag_servdatetype_code' => [
                'ss_servredflag_servdatetype_code' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Date Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 25, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\DateTypes::optionsActive'],
                'ss_servredflag_interval' => ['order' => 2, 'label_name' => 'Interval', 'type' => 'interval', 'null' => true, 'required' => true, 'percent' => 25, 'placeholder' => 'Hours:Minutes:Seconds'],
                'ss_servredflag_business' => ['order' => 3, 'label_name' => 'Business Hours', 'type' => 'boolean', 'percent' => 25],
                'ss_servredflag_before' => ['order' => 4, 'label_name' => 'Before', 'type' => 'boolean', 'percent' => 25],
            ],
            'ss_servredflag_red_flag_servstatus_code' => [
                'ss_servredflag_red_flag_servstatus_code' => ['order' => 1, 'row_order' => 400, 'label_name' => 'Red Flag Status', 'domain' => 'group_code', 'null' => true, 'required' => 'c', 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_params' => ['ss_servstatus_red_flag' => 1]],
            ],
            'ss_servredflag_where' => [
                'ss_servredflag_where' => ['order' => 1, 'row_order' => 500, 'label_name' => 'Where', 'type' => 'text', 'null' => true, 'percent' => 100, 'method' => 'textarea', 'persistent' => true, 'readonly' => true],
            ],
            'ss_servredflag_notification_module_id' => [
                'ss_servredflag_notification_module_id' => ['order' => 1, 'row_order' => 600, 'label_name' => 'Notification', 'domain' => 'module_id', 'required' => 'c', 'null' => true, 'percent' => 100, 'placeholder' => 'Notification', 'method' => 'select', 'options_model' => '\Numbers\Tenants\Tenants\DataSource\Module\Features::optionsJson', 'options_params' => ['sm_feature_type' => 20], 'tree' => true, 'searchable' => true, 'json_contains' => ['module_id' => 'ss_servredflag_notification_module_id', 'feature_code' => 'ss_servredflag_notification_feature_code']],
            ],
            self::HIDDEN => [
                'ss_servredflag_notification_feature_code' => ['order' => 4, 'label_name' => 'Feature', 'domain' => 'feature_code', 'required' => 'c', 'null' => true, 'method' => 'hidden']
            ]
        ],
        'all_services_container' => [
            'ss_servredflag_all_services' => [
                'ss_servredflag_all_services' => ['order' => 1, 'row_order' => 100, 'label_name' => 'All Services', 'type' => 'boolean'],
            ]
        ],
        'services_container' => [
            'row1' => [
                'ss_servrdflgserv_service_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 95, 'details_unique_select' => true, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Services::optionsActive', 'onchange' => 'this.form.submit();'],
                'ss_servrdflgserv_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ]
        ],
        'owners_container' => [
            'row1' => [
                'ss_servrdflgowner_ownertype_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Owner Type', 'domain' => 'type_id', 'null' => true, 'required' => true, 'percent' => 95, 'details_unique_select' => true, 'method' => 'select', 'options_model' => '\Numbers\Users\Users\Model\User\Owner\Types::optionsActive', 'onchange' => 'this.form.submit();'],
                'ss_servrdflgowner_inactive' => ['order' => 2, 'label_name' => 'Inactive', 'type' => 'boolean', 'percent' => 5]
            ]
        ],
        'statuses_container' => [
            'row1' => [
                'ss_servrdflgstatus_servstatus_code' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Status', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 95, 'details_unique_select' => true, 'method' => 'select', 'searchable' => true, 'details_unique_select' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Statuses::optionsActive', 'options_params' => ['ss_servstatus_red_flag' => 0], 'onchange' => 'this.form.submit();'],
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
            ],
            '\Numbers\Services\Services\Model\Service\RedFlag\Statuses' => [
                'name' => 'Statuses',
                'pk' => ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servredflag_id', 'ss_servrdflgstatus_servstatus_code'],
                'type' => '1M',
                'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgstatus_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgstatus_servredflag_id']
            ],
            '\Numbers\Services\Services\Model\Service\RedFlag\Owners' => [
                'name' => 'Owners',
                'pk' => ['ss_servrdflgowner_tenant_id', 'ss_servrdflgowner_servredflag_id', 'ss_servrdflgowner_ownertype_id'],
                'type' => '1M',
                'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgowner_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgowner_servredflag_id']
            ],
        ]
    ];

    public function overrides(& $form)
    {
        $body = \Request::input('ss_servredflag_where', false);
        if (!empty($body)) {
            $form->values['ss_servredflag_where'] = $body;
        }
    }

    public function validate(& $form)
    {
        if (empty($form->values['\Numbers\Services\Services\Model\Service\RedFlag\Services']) && empty($form->values['ss_servredflag_all_services'])) {
            $form->error(DANGER, Messages::REQUIRED_FIELD, "\Numbers\Services\Services\Model\Service\RedFlag\Services[1][ss_servrdflgserv_service_id]");
        }
        // if we choose all services we need to unset services
        if (!empty($form->values['ss_servredflag_all_services'])) {
            $form->values['\Numbers\Services\Services\Model\Service\RedFlag\Services'] = [];
        }
        if ($form->values['ss_servredflag_type_id'] == 10 && empty($form->values['ss_servredflag_red_flag_servstatus_code'])) {
            $form->error(DANGER, Messages::REQUIRED_FIELD, 'ss_servredflag_red_flag_servstatus_code');
        }
        if ($form->values['ss_servredflag_type_id'] == 10 && empty($form->values['\Numbers\Services\Services\Model\Service\RedFlag\Statuses'])) {
            $form->error(DANGER, Messages::REQUIRED_FIELD, '\Numbers\Services\Services\Model\Service\RedFlag\Statuses[1][ss_servrdflgstatus_servstatus_code]');
        }
        if ($form->values['ss_servredflag_type_id'] == 20 && empty($form->values['ss_servredflag_notification_module_id'])) {
            $form->error(DANGER, Messages::REQUIRED_FIELD, 'ss_servredflag_notification_module_id');
        }
        if (!empty($form->values['ss_servredflag_interval'])) {
            $interval = explode(':', $form->values['ss_servredflag_interval']);
            $seconds = 0;
            if (count($interval) != 3) {
                $form->error(DANGER, Messages::INVALID_VALUES, 'ss_servredflag_interval');
                return;
            } else {
                $seconds = intval($interval[0]) * 60 * 60;
                $seconds += intval($interval[1]) * 60;
                $seconds += intval($interval[2]);
            }
            if (!empty($form->values['ss_servredflag_business'])) {
                if ($seconds < 60) {
                    $form->error(DANGER, 'Minimum 1 minute for business hours.', 'ss_servredflag_interval');
                }
            }
        }
    }

    public function overrideFieldValue(& $form, & $options, & $value, & $neighbouring_values)
    {
        if ($form->values['ss_servredflag_type_id'] == 10) {
            if ($options['options']['field_name'] == 'ss_servredflag_before') {
                $options['options']['readonly'] = true;
            }
            if ($options['options']['field_name'] == 'ss_servredflag_notification_module_id') {
                $options['options']['row_class'] = 'grid_row_hidden';
            }
        } else {
            if ($options['options']['field_name'] == 'ss_servredflag_red_flag_servstatus_code') {
                $options['options']['row_class'] = 'grid_row_hidden';
            }
            if ($options['options']['field_name'] == 'ss_servrdflgstatus_servstatus_code') {
                unset($options['options']['options_params']['ss_servstatus_red_flag']);
            }
        }
    }

    public function overrideTabs(& $form, & $options, & $tab, & $neighbouring_values)
    {
        $result = [];
        if ($tab == 'owners' && $form->values['ss_servredflag_type_id'] == 20) {
            $result['hidden'] = true;
        }
        return $result;
    }
}
