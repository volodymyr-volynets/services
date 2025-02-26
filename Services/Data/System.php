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

use Object\Import;

class System extends Import
{
    public $data = [
        'controllers' => [
            'options' => [
                'pk' => ['sm_resource_id'],
                'model' => '\Numbers\Backend\System\Modules\Model\Collection\Resources',
                'method' => 'save'
            ],
            'data' => [
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Services',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Services',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Global',
                    'sm_resource_name' => 'S/S Services',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-servicestack',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\ServiceScripts',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\ServiceScripts',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Global',
                    'sm_resource_name' => 'S/S Service Scripts',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-list-alt',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Activate',
                            'sm_rsrcmp_action_id' => '::id::Activate_Data',
                            'sm_rsrcmp_inactive' => 0
                        ],
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Groups',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Service\Groups',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Service Type Groups',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-object-group',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Types',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Service\Types',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Service Types',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-clone',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\DateTypes',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Service\DateTypes',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Date Types',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-calendar-check',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Status\Groups',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Status\Groups',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Status Groups',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-object-group',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Status\Statuses',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Status\Statuses',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Statuses',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-flag',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Status\StatusExtended',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Status\StatusExtended',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Statuses (Extended)',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-flag-checkered',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Categories',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Service\Categories',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Service Categories',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-gg',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\DispositionCodes',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\DispositionCodes',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Disposition Codes',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-exclamation',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Report\ServiceSheets',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Report\ServiceSheets',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Miscellaneous',
                    'sm_resource_name' => 'S/S Service Sheets',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-buromobelexperte',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Miscellaneous',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ],
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::Report_View',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Channels',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Service\Channels',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Channels',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-dot-circle',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ]
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Customer / Location Assignments',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-dyalog',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Miscellaneous',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ],
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICE_CUSTOMER_LOCATION_ASSIGNMENT',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ],
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\RedFlags',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Service\RedFlags',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Red Flags & Reminders',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-font-awesome-flag',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ],
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ],
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Workflows',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Workflows',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Workflows',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-quinscape',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ],
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ],
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\Grant\ServiceCustomerLocation',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\Grant\ServiceCustomerLocation',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Grant Customer / Location Assignments',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-dyalog',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Grant',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ],
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICE_CUSTOMER_LOCATION_ASSIGNMENT',
                            'sm_rsrcftr_inactive' => 0
                        ]
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                    ]
                ],
                [
                    'sm_resource_id' => '::id::\Numbers\Services\Services\Controller\PaymentTypes',
                    'sm_resource_code' => '\Numbers\Services\Services\Controller\PaymentTypes',
                    'sm_resource_type' => 100,
                    'sm_resource_classification' => 'Settings',
                    'sm_resource_name' => 'S/S Payment Types',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-credit-card',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 1,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0,
                    '\Numbers\Backend\System\Modules\Model\Resource\Features' => [
                        [
                            'sm_rsrcftr_feature_code' => 'SS::SERVICES',
                            'sm_rsrcftr_inactive' => 0
                        ],
                    ],
                    '\Numbers\Backend\System\Modules\Model\Resource\Map' => [
                        [
                            'sm_rsrcmp_method_code' => 'AllActions',
                            'sm_rsrcmp_action_id' => '::id::All_Actions',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Index',
                            'sm_rsrcmp_action_id' => '::id::List_Export',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_View',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_New',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Edit',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Inactivate',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Edit',
                            'sm_rsrcmp_action_id' => '::id::Record_Delete',
                            'sm_rsrcmp_inactive' => 0
                        ],
                        [
                            'sm_rsrcmp_method_code' => 'Import',
                            'sm_rsrcmp_action_id' => '::id::Import_Records',
                            'sm_rsrcmp_inactive' => 0
                        ],
                    ]
                ],
            ]
        ],
        'menu' => [
            'options' => [
                'pk' => ['sm_resource_id'],
                'model' => '\Numbers\Backend\System\Modules\Model\Collection\Resources',
                'method' => 'save'
            ],
            'data' => [
                [
                    'sm_resource_id' => '::id::\Menu\Operations\Service\Management',
                    'sm_resource_code' => '\Menu\Operations\Service\Management',
                    'sm_resource_type' => 299,
                    'sm_resource_name' => 'Service Management',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-certificate',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => null,
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 0,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Operations\Service\Management\Settings',
                    'sm_resource_code' => '\Menu\Operations\Service\Management\Settings',
                    'sm_resource_type' => 299,
                    'sm_resource_name' => 'Settings',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-cogs',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 0,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Services',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Services',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Services',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-servicestack',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Services',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Services',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Service\Groups',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Service\Groups',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Service Type Groups',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-object-group',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Groups',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Service/Groups',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Service\Types',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Service\Types',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Service Types',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-clone',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Types',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Service/Types',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Service\DateTypes',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Service\DateTypes',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Date Types',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-calendar-check',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\DateTypes',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Service/DateTypes',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Status\Groups',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Status\Groups',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Status Groups',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-object-group',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Status\Groups',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Status/Groups',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Status\Statuses',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Status\Statuses',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Statuses',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-flag',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Status\Statuses',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Status/Statuses',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Service\Categories',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Service\Categories',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Service Categories',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-gg',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Categories',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Service/Categories',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\ServiceScripts',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\ServiceScripts',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Service Scripts',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-list-alt',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\ServiceScripts',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/ServiceScripts',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\DispositionCodes',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\DispositionCodes',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Disposition Codes',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-exclamation',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\DispositionCodes',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/DispositionCodes',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Operations\Services\Miscellaneous',
                    'sm_resource_code' => '\Menu\Operations\Services\Miscellaneous',
                    'sm_resource_type' => 299,
                    'sm_resource_name' => 'Miscellaneous',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-cubes',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 0,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Report\ServiceSheets',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Report\ServiceSheets',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Service Sheets',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-buromobelexperte',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Miscellaneous',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Report\ServiceSheets',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::Report_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Report/ServiceSheets',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Service\Channels',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Service\Channels',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Channels',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-dot-circle',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\Channels',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Service/Channels',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Cust./Loc. Assignments',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-dyalog',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Miscellaneous',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Assignment/ServiceCustomerLocation/',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation2',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation2',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Cust./Loc. Assignments',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-dyalog',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'User Management',
                    'sm_resource_group3_name' => 'Assignments',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Assignment\ServiceCustomerLocation',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Assignment/ServiceCustomerLocation/',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Service\RedFlags',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Service\RedFlags',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Red Flags & Reminders',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-font-awesome-flag',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Service\RedFlags',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Service/RedFlags/',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Workflows',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Workflows',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Workflows',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-quinscape',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Workflows',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Workflows',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Operations\Service\Management\Grant',
                    'sm_resource_code' => '\Menu\Operations\Service\Management\Grant',
                    'sm_resource_type' => 299,
                    'sm_resource_name' => 'Grant',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-x-ray',
                    'sm_resource_module_code' => 'UM',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => null,
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 0,
                    'sm_resource_menu_acl_resource_id' => null,
                    'sm_resource_menu_acl_method_code' => null,
                    'sm_resource_menu_acl_action_id' => null,
                    'sm_resource_menu_url' => null,
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Grant\ServiceCustomerLocation',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Grant\ServiceCustomerLocation',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Grant Cust./Loc. Assign.',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fab fa-dyalog',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Grant',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Grant\ServiceCustomerLocation',
                    'sm_resource_menu_acl_method_code' => 'Edit',
                    'sm_resource_menu_acl_action_id' => '::id::Record_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Grant/ServiceCustomerLocation/_Edit',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\PaymentTypes',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\PaymentTypes',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Payment Types',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'far fa-credit-card',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\PaymentTypes',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/PaymentTypes',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
                [
                    'sm_resource_id' => '::id::\Menu\Numbers\Services\Services\Controller\Status\StatusExtended',
                    'sm_resource_code' => '\Menu\Numbers\Services\Services\Controller\Status\StatusExtended',
                    'sm_resource_type' => 200,
                    'sm_resource_name' => 'Statuses (Extended)',
                    'sm_resource_description' => null,
                    'sm_resource_icon' => 'fas fa-flag-checkered',
                    'sm_resource_module_code' => 'SS',
                    'sm_resource_group1_name' => 'Operations',
                    'sm_resource_group2_name' => 'Service Management',
                    'sm_resource_group3_name' => 'Settings',
                    'sm_resource_group4_name' => null,
                    'sm_resource_group5_name' => null,
                    'sm_resource_group6_name' => null,
                    'sm_resource_group7_name' => null,
                    'sm_resource_group8_name' => null,
                    'sm_resource_group9_name' => null,
                    'sm_resource_acl_public' => 0,
                    'sm_resource_acl_authorized' => 0,
                    'sm_resource_acl_permission' => 1,
                    'sm_resource_menu_acl_resource_id' => '::id::\Numbers\Services\Services\Controller\Status\StatusExtended',
                    'sm_resource_menu_acl_method_code' => 'Index',
                    'sm_resource_menu_acl_action_id' => '::id::List_View',
                    'sm_resource_menu_url' => '/Numbers/Services/Services/Controller/Status/StatusExtended',
                    'sm_resource_menu_options_generator' => null,
                    'sm_resource_inactive' => 0
                ],
            ]
        ]
    ];
}
