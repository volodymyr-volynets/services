<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Service\RedFlag;

use Object\Data;

class Types extends Data
{
    public $module_code = 'SS';
    public $title = 'S/S Service Red Flag Types';
    public $column_key = 'ss_servrdflgtype_id';
    public $column_prefix = 'ss_servrdflgtype_';
    public $columns = [
        'ss_servrdflgtype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
        'ss_servrdflgtype_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $options_map = [
        'ss_servrdflgtype_name' => 'name'
    ];
    public $orderby = [
        'ss_servrdflgtype_name' => SORT_ASC
    ];
    public $data = [
        10 => ['ss_servrdflgtype_name' => 'Red Flag'],
        20 => ['ss_servrdflgtype_name' => 'Reminder'],
    ];
}
