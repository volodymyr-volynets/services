<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Widgets\Complaints\Form\List2;

use Numbers\Users\Documents\Base\Base;
use Numbers\Users\Documents\Base\Model\Files;
use Numbers\Users\Users\Model\Users;
use Object\Form\Wrapper\List2;

class Complaints extends List2
{
    public $form_link = 'wg_complaints';
    public $module_code = 'SS';
    public $title = 'S/S Complaints List';
    public $options = [
        'segment' => null,
        'actions' => [
            'refresh' => true,
            'filter_sort' => ['value' => 'Filter/Sort', 'sort' => 32000, 'icon' => 'fas fa-filter', 'onclick' => 'Numbers.Form.listFilterSortToggle(this);']
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
                'full_text_search' => ['order' => 1, 'row_order' => 300, 'label_name' => 'Text Search', 'full_text_search_columns' => ['a.wg_complaint_comment'], 'placeholder' => true, 'domain' => 'name', 'percent' => 100, 'null' => true],
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
                'wg_complaint_id' => ['order' => 1, 'row_order' => 100, 'label_name' => '#', 'domain' => 'big_id', 'percent' => 10, 'url_edit' => true],
                'wg_complaint_important' => ['order' => 2, 'label_name' => 'Important', 'type' => 'boolean', 'percent' => 10],
                'wg_complaint_servcompstatus_code' => ['order' => 3, 'label_name' => 'Status', 'domain' => 'group_code', 'percent' => 25, 'options_model' => '\Numbers\Services\Widgets\Complaints\Model\Statuses'],
                'wg_complaint_comment' => ['order' => 4, 'label_name' => 'Comment', 'domain' => 'name', 'percent' => 65, 'custom_renderer' => '\Numbers\Services\Widgets\Complaints\Form\List2\Complaints::renderCommentValue'],
            ],
            'row2' => [
                '__about' => ['order' => 1, 'row_order' => 200, 'label_name' => '', 'percent' => 10],
                'wg_complaint_public' => ['order' => 2, 'label_name' => 'Public', 'type' => 'boolean', 'percent' => 10],
                'wg_complaint_inserted_timestamp' => ['order' => 3, 'label_name' => 'Datetime', 'type' => 'timestamp', 'percent' => 25, 'format' => '\Format::niceTimestamp'],
                'wg_complaint_file_1' => ['order' => 4, 'label_name' => 'Files', 'domain' => 'name', 'percent' => 65, 'custom_renderer' => '\Numbers\Services\Widgets\Complaints\Form\List2\Complaints::renderCommentFiles', 'skip_fts' => true],
            ]
        ]
    ];
    public $query_primary_model;
    public $list_options = [
        'pagination_top' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'pagination_bottom' => '\Numbers\Frontend\HTML\Form\Renderers\HTML\Pagination\Base',
        'default_limit' => 10,
        'default_sort' => [
            'wg_complaint_id' => SORT_DESC
        ]
    ];
    public const LIST_SORT_OPTIONS = [
        'wg_complaint_id' => ['name' => 'Complaint #'],
    ];
    public $subforms = [
        'wg_new_complaint' => [
            'form' => '\Numbers\Services\Widgets\Complaints\Form\NewComplaint',
            'label_name' => 'Edit/New Complaint',
            'actions' => [
                'new' => ['name' => 'New'],
                'edit' => ['name' => 'Edit', 'url_edit' => true],
                'delete' => ['name' => 'Delete', 'url_delete' => true],
            ]
        ]
    ];

    public function overrides(& $form)
    {
        if (!empty($form->__options['model_table'])) {
            $model = new $form->__options['model_table']();
            $form->collection = [
                'name' => 'Complaints',
                'model' => $model->complaints_model
            ];
        }
    }

    public function overrideFieldValue(& $form, & $options, & $value, & $neighbouring_values)
    {
        // hide module #
        if (in_array($options['options']['field_name'], ['__module_id', '__separator__module_id', '__format'])) {
            $options['options']['row_class'] = 'grid_row_hidden';
            return;
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
        $model = new $form->options['model_table']();
        $form->query = \Factory::model($model->complaints_model)->queryBuilder()->select();
        $form->processReportQueryFilter($form->query);
        // additional filter
        $parent_model = \Factory::model($form->options['model_table']);
        if (!empty($parent_model->complaints['map'])) {
            foreach ($parent_model->complaints['map'] as $k => $v) {
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

    public function renderCommentValue(& $form, & $options, & $value, & $neighbouring_values)
    {
        return nl2br($value);
    }

    public function renderCommentUser(& $form, & $options, & $value, & $neighbouring_values)
    {
        return Users::getUsernameWithAvatar($neighbouring_values['wg_complaint_inserted_user_id']);
    }

    public function renderCommentFiles(& $form, & $options, & $value, & $neighbouring_values)
    {
        $result = '';
        $files = [];
        for ($i = 1; $i <= 10; $i++) {
            if (!empty($neighbouring_values['wg_complaint_file_' . $i])) {
                $files[] = $neighbouring_values['wg_complaint_file_' . $i];
            } else {
                break;
            }
        }
        if (!empty($files)) {
            $files = Files::getStatic([
                'where' => [
                    'dt_file_id' => $files
                ],
                'pk' => ['dt_file_id']
            ]);
            foreach ($files as $k => $v) {
                $result .= \HTML::a(['href' => Base::generateURL($k, false, $v['dt_file_name']), 'value' => \HTML::icon(['type' => 'fas fa-link']) . ' ' . $v['dt_file_name']]);
                $result .= '<br/>';
            }
        }
        return $result;
    }
}
