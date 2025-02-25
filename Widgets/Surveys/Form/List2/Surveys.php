<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Widgets\Surveys\Form\List2;

use Numbers\Services\Services\Helper\ServiceScript\Helper;
use Object\Form\Wrapper\List2;

class Surveys extends List2
{
    public $form_link = 'wg_surveys';
    public $module_code = 'SS';
    public $title = 'S/S Surveys List';
    public $options = [
        'segment' => null,
        'actions' => [
            'refresh' => true,
        ]
    ];
    public $containers = [
        'tabs' => ['default_row_type' => 'grid', 'order' => 1000, 'type' => 'tabs', 'class' => 'numbers_form_filter_sort_container'],
        'filter' => ['default_row_type' => 'grid', 'order' => 1500],
        'sort' => self::LIST_SORT_CONTAINER,
        self::LIST_CONTAINER => ['default_row_type' => 'grid', 'order' => PHP_INT_MAX],
    ];
    public $rows = [
        'tabs' => [
            'filter' => ['order' => 100, 'label_name' => 'Filter'],
            'sort' => ['order' => 200, 'label_name' => 'Sort'],
        ]
    ];
    public $elements = [
        'tabs' => [
            'filter' => [
                'filter' => ['container' => 'filter', 'order' => 100]
            ],
            'sort' => [
                'sort' => ['container' => 'sort', 'order' => 100]
            ]
        ],
        'filter' => [
            'full_text_search' => [
                'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.wg_comment_value'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
            ]
        ],
        'sort' => [
            '__sort' => [
                '__sort' => ['order' => 1, 'row_order' => 100, 'label_name' => 'Sort', 'domain' => 'code', 'details_unique_select' => true, 'percent' => 50, 'null' => true, 'method' => 'select', 'options' => self::LIST_SORT_OPTIONS, 'onchange' => 'this.form.submit();'],
                '__order' => ['order' => 2, 'label_name' => 'Order', 'type' => 'smallint', 'default' => SORT_ASC, 'percent' => 50, 'null' => true, 'method' => 'select', 'no_choose' => true, 'options_model' => '\Object\Data\Model\Order', 'onchange' => 'this.form.submit();'],
            ]
        ],
        self::LIST_BUTTONS => self::LIST_BUTTONS_DATA,
        self::LIST_CONTAINER => [
            'row1' => [
                'wg_survey_id' => ['order' => 1, 'row_order' => 100, 'label_name' => 'S.S. #', 'domain' => 'big_id', 'percent' => 15, 'url_edit' => true],
                'wg_survey_service_script_id' => ['order' => 2, 'label_name' => 'Survey', 'domain' => 'service_script_id', 'null' => true, 'percent' => 35, 'options_model' => '\Numbers\Services\Services\Model\ServiceScripts'],
                'wg_survey_region_id' => ['order' => 3, 'label_name' => 'Region', 'domain' => 'region_id', 'null' => true, 'percent' => 25, 'options_model' => '\Numbers\Users\Organizations\Model\Regions'],
                'wg_survey_language_code' => ['order' => 4, 'label_name' => 'Language', 'domain' => 'language_code', 'percent' => 25, 'options_model' => '\Numbers\Internalization\Internalization\Model\Language\Codes'],
            ],
            'row2' => [
                '__blank' => ['order' => 1, 'row_order' => 200, 'label_name' => '', 'percent' => 15],
                'wg_survey_answers' => ['order' => 2, 'label_name' => 'Questions / Answers', 'type' => 'text', 'percent' => 85, 'custom_renderer' => '\Numbers\Services\Widgets\Surveys\Form\List2\Surveys::renderSSValue'],
            ]
        ]
    ];
    public $query_primary_model;
    public $list_options = [
        'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'default_limit' => 10,
        'default_sort' => [
            'wg_survey_id' => SORT_DESC
        ]
    ];
    public const LIST_SORT_OPTIONS = [
        'wg_survey_id' => ['name' => 'Survey #'],
    ];
    public $subforms = [
        'wg_edit_survey' => [
            'form' => '\Numbers\Services\Widgets\Surveys\Form\EditSurvey',
            'label_name' => 'Edit Surveys',
            'actions' => [
                'edit' => ['name' => 'Edit', 'url_edit' => true],
                'delete' => ['name' => 'Delete', 'url_delete' => true],
            ]
        ],
        'wg_new_survey' => [
            'form' => '\Numbers\Services\Widgets\Surveys\Form\NewSurvey',
            'label_name' => 'New Survey',
            'actions' => [
                'new' => ['name' => 'New'],
            ]
        ]
    ];

    public function overrides(& $form)
    {
        if (!empty($form->__options['model_table'])) {
            $model = new $form->__options['model_table']();
            $form->collection = [
                'name' => 'Service Scripts',
                'model' => $model->surveys_model
            ];
        }
    }

    public function overrideFieldValue(& $form, & $options, & $value, & $neighbouring_values)
    {
        // hide module #
        if (in_array($options['options']['field_name'], ['__module_id', '__separator__module_id', '__format'])) {
            $options['options']['row_class'] = 'grid_row_hidden';
        }
    }

    public function renderSSValue(& $form, & $options, & $value, & $neighbouring_values)
    {
        // legacy import data
        if (!empty($neighbouring_values['wg_survey_legacy_answers'])) {
            return nl2br($neighbouring_values['wg_survey_legacy_answers']);
        } else { // we need to render
            return Helper::renderAsText(
                $neighbouring_values['wg_survey_service_script_id'],
                $neighbouring_values['wg_survey_channel_id'],
                $neighbouring_values['wg_survey_region_id'],
                $neighbouring_values['wg_survey_language_code'],
                json_decode($neighbouring_values['wg_survey_answers'], true),
                $neighbouring_values['wg_survey_total_amount'] . ''
            );
        }
    }

    public function listQuery(& $form)
    {
        $result = [
            'success' => false,
            'error' => [],
            'total' => 0,
            'rows' => []
        ];
        $parent_model = \Factory::model($form->options['model_table']);
        $form->query = \Factory::model($parent_model->surveys_model)->queryBuilder()->select();
        $form->processReportQueryFilter($form->query);
        // additional filter
        if (!empty($parent_model->surveys['map'])) {
            foreach ($parent_model->surveys['map'] as $k => $v) {
                if (isset($form->options['input'][$k])) {
                    $form->query->where('AND', ['a.' . $v, '=', (int) $form->options['input'][$k]]);
                }
            }
        }
        // query #1 get counter
        $counter_query = clone $form->query;
        $counter_query->columns(['counter' => 'COUNT(*)'], ['empty_existing' => true]);
        $temp = $counter_query->query();
        if (!$temp['success']) {
            array_merge3($result['error'], $temp['error']);
            return $result;
        }
        $result['total'] = $temp['rows'][0]['counter'];
        // query #2 get rows
        $form->processListQueryOrderBy();
        $form->query->offset($form->values['__offset'] ?? 0);
        $form->query->limit($form->values['__limit']);
        $temp = $form->query->query();
        if (!$temp['success']) {
            array_merge3($result['error'], $temp['error']);
            return $result;
        }
        $result['rows'] = & $temp['rows'];
        $result['success'] = true;
        return $result;
    }
}
