<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Data;

class Import extends \Object\Import
{
    public $data = [
        'modules' => [
            'options' => [
                'pk' => ['sm_module_code'],
                'model' => '\Numbers\Backend\System\Modules\Model\Collection\Modules',
                'method' => 'save'
            ],
            'data' => [
                [
                    'sm_module_code' => 'SS',
                    'sm_module_type' => 20,
                    'sm_module_name' => 'S/S Service Management',
                    'sm_module_abbreviation' => 'S/S',
                    'sm_module_icon' => 'fas fa-certificate',
                    'sm_module_transactions' => 0,
                    'sm_module_multiple' => 0,
                    'sm_module_activation_model' => null,
                    'sm_module_custom_activation' => false,
                    'sm_module_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Module\Dependencies' => []
                ]
            ]
        ],
        'features' => [
            'options' => [
                'pk' => ['sm_feature_code'],
                'model' => '\Numbers\Backend\System\Modules\Model\Collection\Module\Features',
                'method' => 'save'
            ],
            'data' => [
                [
                    'sm_feature_module_code' => 'SS',
                    'sm_feature_code' => 'SS::SERVICES',
                    'sm_feature_type' => 10,
                    'sm_feature_name' => 'S/S Services',
                    'sm_feature_icon' => 'fab fa-servicestack',
                    'sm_feature_activation_model' => null,
                    'sm_feature_activated_by_default' => 1,
                    'sm_feature_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Module\Dependencies' => []
                ],
                [
                    'sm_feature_module_code' => 'SS',
                    'sm_feature_code' => 'SS::SERVICE_CUSTOMER_LOCATION_ASSIGNMENT',
                    'sm_feature_type' => 10,
                    'sm_feature_name' => 'S/S Service Customer Location Assignment',
                    'sm_feature_icon' => 'fas fa-coffee',
                    'sm_feature_activation_model' => null,
                    'sm_feature_activated_by_default' => 0,
                    'sm_feature_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Module\Dependencies' => []
                ],
            ]
        ],
    ];
}
