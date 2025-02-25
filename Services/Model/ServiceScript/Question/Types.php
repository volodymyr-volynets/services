<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\ServiceScript\Question;

use Object\Data;

class Types extends Data
{
    public $module_code = 'SS';
    public $title = 'S/S ServiceScript Question Types';
    public $column_key = 'ss_servquestype_code';
    public $column_prefix = 'ss_servquestype_';
    public $columns = [
        'ss_servquestype_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'ss_servquestype_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $options_map = [
        'ss_servquestype_name' => 'name'
    ];
    public $orderby = [
        'ss_servquestype_name' => SORT_ASC
    ];
    public $data = [
        'input' => ['ss_servquestype_name' => 'Text (Short)'],
        'textarea' => ['ss_servquestype_name' => 'Text (Long)'],
        'boolean' => ['ss_servquestype_name' => 'Boolean'],
        'select' => ['ss_servquestype_name' => 'Select'],
        'multiselect' => ['ss_servquestype_name' => 'Select (Multiple)'],
        'checkbox' => ['ss_servquestype_name' => 'Checkboxes'],
        'radiobox' => ['ss_servquestype_name' => 'Radioboxes'],
        'information' => ['ss_servquestype_name' => 'Information'],
        // pricing
        'price_select' => ['ss_servquestype_name' => 'Price Select'],
        'price_multiselect' => ['ss_servquestype_name' => 'Price Select (Multiple)'],
        'price_amount' => ['ss_servquestype_name' => 'Price Amount'],
        // calendars
        'cal_date' => ['ss_servquestype_name' => 'Calendar Date'],
        'cal_datetime' => ['ss_servquestype_name' => 'Calendar Datetime'],
        'cal_time' => ['ss_servquestype_name' => 'Calendar Time'],
    ];
}
