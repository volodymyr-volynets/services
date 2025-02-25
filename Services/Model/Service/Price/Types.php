<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Service\Price;

use Object\Data;

class Types extends Data
{
    public $module_code = 'SS';
    public $title = 'S/S Service Price Types';
    public $column_key = 'ss_servprctype_id';
    public $column_prefix = 'ss_servprctype_';
    public $orderby = [
        'ss_servprctype_id' => SORT_ASC
    ];
    public $columns = [
        'ss_servprctype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
        'ss_servprctype_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $data = [
        10 => ['ss_servprctype_name' => 'Flat'],
        20 => ['ss_servprctype_name' => 'Percent'],
    ];
}
