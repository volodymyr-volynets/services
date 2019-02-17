<?php

namespace Numbers\Services\Services\Form\Report;
class ServiceScheets extends \Object\Form\Wrapper\Report {
	public $form_link = 'ss_service_sheets_report';
	public $module_code = 'SS';
	public $title = 'S/S Service Scheets Report';
	public $options = [
		'segment' => self::SEGMENT_REPORT,
		'actions' => [
			'refresh' => true,
			'filter_sort' => ['value' => 'Filter/Sort', 'sort' => 32000, 'icon' => 'fas fa-filter', 'onclick' => 'Numbers.Form.listFilterSortToggle(this);']
		]
	];
	public $containers = [
		'tabs' => ['default_row_type' => 'grid', 'order' => 1000, 'type' => 'tabs', 'class' => 'numbers_form_filter_sort_container'],
		'filter' => ['default_row_type' => 'grid', 'order' => 1500],
		self::REPORT_BUTTONS => ['default_row_type' => 'grid', 'order' => 2000, 'class' => 'numbers_form_filter_sort_container'],
	];
	public $rows = [
		'tabs' => [
			'filter' => ['order' => 100, 'label_name' => 'Filter'],
		]
	];
	public $elements = [
		'tabs' => [
			'filter' => [
				'filter' => ['container' => 'filter', 'order' => 100]
			],
		],
		'filter' => [
			'service_id' => [
				'service_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'required' => true, 'percent' => 100, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Services::optionsActive'],
			],
			'channel_id' => [
				'channel_id' => ['order' => 1, 'row_order' => 200, 'label_name' => 'Channel', 'domain' => 'channel_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\Service\Channels::optionsActive'],
				'region_id' => ['order' => 2, 'label_name' => 'Region', 'domain' => 'region_id', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Users\Organizations\Model\Regions::optionsActive'],
			],
			'type_code' => [
				'type_code' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Sheet Type', 'domain' => 'group_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Services\Services\Model\ServiceSheet\Types'],
				'language_code' => ['order' => 2, 'label_name' => 'Language', 'domain' => 'language_code', 'null' => true, 'required' => true, 'percent' => 50, 'method' => 'select', 'options_model' => '\Numbers\Internalization\Internalization\Model\Language\Codes::optionsActive', 'options_params' => ['in_language_code;<>' => 'sm0']],
			]
		],
		self::REPORT_BUTTONS => self::REPORT_BUTTONS_DATA
	];

	public function buildReport(& $form) {
		$service = \Numbers\Services\Services\Model\Services::getStatic([
			'where' => [
				'ss_service_id' => $form->values['service_id'],
			],
			'single_row' => true,
			'pk' => null
		]);
		$title = i18n(null, 'Service Sheet for [service]', ['replace' => ['[service]' => $service['ss_service_name']]]);
		// create new report
		$report = new \Object\Form\Builder\Report([
			'pdf' => [
				'title' => $title,
				'skip_header_time' => true
			],
		]);
		$report->addReport(DEF, $form, [
			'skip_filter' => true
		]);
		$even = EVEN;
		// generate header
		if ($form->values['type_code'] == 'LOCATION') {
			$report->addHeader(DEF, 'row1', [
				'details' => ['label_name' => 'Location Details', 'percent' => 100],
			]);
			$report->addHeader(DEF, 'row2', [
				'name' => ['label_name' => 'Name', 'percent' => 30],
				'data' => ['label_name' => 'Data', 'percent' => 70],
			],
			[
				'skip_rendering' => true
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => i18n(null, 'Location Name:'),
					'underline' => true,
				],
				'data' => [
					'value' => '',
					'underline' => true,
				]
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => i18n(null, 'Contact Information:'),
					'underline' => true,
				],
				'data' => [
					'value' => '',
					'underline' => true,
				]
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => i18n(null, 'Service Description:'),
				'data' => ''
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => '',
					'underline' => true,
				],
				'data' => [
					'value' => '',
					'underline' => true,
				]
			]);
			$report->addSeparator(DEF);
		} else if ($form->values['type_code'] == 'CUSTOMER') {
			$report->addHeader(DEF, 'row1', [
				'details' => ['label_name' => 'Customer Details', 'percent' => 100],
			]);
			$report->addHeader(DEF, 'row2', [
				'name' => ['label_name' => 'Name', 'percent' => 50],
				'data' => ['label_name' => 'Data', 'percent' => 50],
			],
			[
				'skip_rendering' => true
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => i18n(null, 'Title, First, Last Names:'),
					'underline' => true,
				],
				'data' => [
					'value' => '',
					'underline' => true,
				]
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => i18n(null, 'Address, City, Province, Postal Code:'),
					'underline' => true,
				],
				'data' => [
					'value' => '',
					'underline' => true,
				]
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => i18n(null, 'Primary Phone:'),
					'underline' => true,
				],
				'data' => [
					'value' => i18n(null, 'Secondary Phone:'),
					'underline' => true,
				]
			]);
			$report->addData(DEF, 'row2', $even, [
				'name' => [
					'value' => i18n(null, 'Cell Phone:'),
					'underline' => true,
				],
				'data' => [
					'value' => i18n(null, 'Email:'),
					'underline' => true,
				]
			]);
			$report->addSeparator(DEF);
		}
		// service script
		if (!empty($service['ss_service_service_script_id'])) {
			$service_script = \Numbers\Services\Services\DataSource\ServiceScripts::getStatic([
				'where' => [
					'service_script_id' => $service['ss_service_service_script_id'],
					'channel_id' => $form->values['channel_id'],
					'region_id' => $form->values['region_id'],
					'language_code' => $form->values['language_code'],
				]
			]);
			$report->addReport(DEF2, $form, [
				'skip_filter' => true
			]);
			$report->addHeader(DEF2, 'row1', [
				'details' => ['label_name' => 'Service Script', 'percent' => 100],
			]);
			$report->addHeader(DEF2, 'row2', [
				'name' => ['label_name' => 'Name', 'percent' => 65],
				'data' => ['label_name' => 'Data', 'percent' => 35],
			],
			[
				'skip_rendering' => true
			]);
			// add questions one by one
			$have_price = false;
			foreach ($service_script as $k => $v) {
				if (in_array($v['type'], ['price_select', 'price_multiselect'])) {
					$have_price = true;
				}
				if (!empty($v['answers'])) {
					$answers = $v['answers'];
					$counter = 1;
					$first = array_shift($answers);
					$underline = empty($answers);
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => $v['name'],
							'underline' => $underline,
							'bold' => $v['required']
						],
						'data' => [
							'value' => '(' . $counter . ') ' . $first['name'],
							'underline' => $underline,
						]
					]);
					if (!empty($answers)) {
						do {
							$counter++;
							$first = array_shift($answers);
							$underline = empty($answers);
							$report->addData(DEF2, 'row2', $even, [
								'name' => [
									'value' => '',
									'underline' => $underline,
								],
								'data' => [
									'value' => '(' . $counter . ') ' . $first['name'],
									'underline' => $underline,
								]
							]);
						} while(count($answers) > 0);
					}
				} else if ($v['type'] == 'textarea') {
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => $v['name'],
							'underline' => false,
							'bold' => $v['required']
						],
						'data' => [
							'value' => '',
							'underline' => false,
						]
					]);
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => '',
							'underline' => false,
						],
						'data' => [
							'value' => '',
							'underline' => false,
						]
					]);
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => '',
							'underline' => true,
						],
						'data' => [
							'value' => '',
							'underline' => true,
						]
					]);
				} else if ($v['type'] == 'information') {
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => $v['name'],
							'underline' => false,
							'bold' => $v['required']
						],
						'data' => [
							'value' => '',
							'underline' => false,
						]
					]);
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => $v['description'],
							'underline' => true,
						],
						'data' => [
							'value' => '',
							'underline' => true,
						]
					]);
				} else {
					$report->addData(DEF2, 'row2', $even, [
						'name' => [
							'value' => $v['name'],
							'underline' => $underline,
							'bold' => $v['required']
						],
						'data' => [
							'value' => '',
							'underline' => $underline,
						]
					]);
				}
			}
			// if we have prices
			if ($have_price) {
				$report->addData(DEF2, 'row2', $even, [
					'name' => [
						'value' => i18n(null, 'Order Total:'),
						'total' => true,
						'bold' => true,
					],
					'data' => [
						'value' => '',
						'total' => true,
					]
				]);
			}
		}
		$report->addSeparator(DEF2);
		// comments
		$report->addReport(DEF3, $form, [
			'skip_filter' => true
		]);
		$report->addHeader(DEF3, 'row1', [
			'details' => ['label_name' => 'Comments:', 'percent' => 100],
		]);
		$report->addHeader(DEF3, 'row2', [
			'name' => ['label_name' => 'Name', 'percent' => 100],
		],
		[
			'skip_rendering' => true
		]);
		$report->addData(DEF3, 'row2', $even, [
			'name' => [
				'value' => '',
				'underline' => true,
			]
		]);
		$report->addData(DEF3, 'row2', $even, [
			'name' => [
				'value' => '',
				'underline' => true,
			]
		]);
		$report->addData(DEF3, 'row2', $even, [
			'name' => [
				'value' => '',
				'underline' => true,
			]
		]);
		$report->addData(DEF3, 'row2', $even, [
			'name' => [
				'value' => '',
				'underline' => true,
			]
		]);
		$report->addData(DEF3, 'row2', $even, [
			'name' => [
				'value' => '',
				'underline' => true,
			]
		]);
		$report->addSeparator(DEF3);
		// representative
		$report->addReport(DEF4, $form, [
			'skip_filter' => true
		]);
		$report->addHeader(DEF4, 'row1', [
			'details' => ['label_name' => 'Representative:', 'percent' => 100],
		]);
		// we must return report object
		return $report;
	}
}