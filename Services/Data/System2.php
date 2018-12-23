<?php

namespace Numbers\Services\Services\Data;
class System2 extends \Object\Import {
	public $data = [
		'subresources' => [
			'options' => [
				'pk' => ['sm_rsrsubres_id'],
				'model' => '\Numbers\Backend\System\Modules\Model\Collection\Subresources',
				'method' => 'save'
			],
			'data' => [
				[
					'sm_rsrsubres_id' => '::id::SS::USER_SERVCUSTLOCASSIGN',
					'sm_rsrsubres_resource_id' => '::id::\Numbers\Users\Users\Controller\Users',
					'sm_rsrsubres_parent_rsrsubres_id' => '::id::UM::USER_ASSIGNMENTS',
					'sm_rsrsubres_code' => 'SS::USER_SERVCUSTLOCASSIGN',
					'sm_rsrsubres_name' => 'S/S Service Customer Location Assignment',
					'sm_rsrsubres_icon' => 'fas fa-coffee',
					'sm_rsrsubres_module_code' => 'SS',
					'sm_rsrsubres_inactive' => 0,
					'\Numbers\Backend\System\Modules\Model\Resource\Subresource\Features' => [
						[
							'sm_rsrsubftr_feature_code' => 'UM::USERS',
							'sm_rsrsubftr_inactive' => 0
						],
						[
							'sm_rsrsubftr_feature_code' => 'SS::SERVICE_CUSTOMER_LOCATION_ASSIGNMENT',
							'sm_rsrsubftr_inactive' => 0
						]
					],
					'\Numbers\Backend\System\Modules\Model\Resource\Subresource\Map' => [
						[
							'sm_rsrsubmap_action_id' => '::id::All_Actions',
							'sm_rsrsubmap_inactive' => 0
						],
						[
							'sm_rsrsubmap_action_id' => '::id::Record_View',
							'sm_rsrsubmap_inactive' => 0
						],
						[
							'sm_rsrsubmap_action_id' => '::id::Record_New',
							'sm_rsrsubmap_inactive' => 0
						],
						[
							'sm_rsrsubmap_action_id' => '::id::Record_Edit',
							'sm_rsrsubmap_inactive' => 0
						],
						[
							'sm_rsrsubmap_action_id' => '::id::Record_Inactivate',
							'sm_rsrsubmap_inactive' => 0
						],
						[
							'sm_rsrsubmap_action_id' => '::id::Record_Delete',
							'sm_rsrsubmap_inactive' => 0
						],
					]
				],
			]
		]
	];
}