<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\ServiceScript;

use Object\Data;

class Types extends Data
{
    public $module_code = 'SS';
    public $title = 'S/S ServiceScript Types';
    public $column_key = 'ss_servscrptype_id';
    public $column_prefix = 'ss_servscrptype_';
    public $columns = [
        'ss_servscrptype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
        'ss_servscrptype_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $options_map = [
        'ss_servscrptype_name' => 'name'
    ];
    public $orderby = [
        'ss_servscrptype_name' => SORT_ASC
    ];
    public $data = [
        10 => ['ss_servscrptype_name' => 'Service Script'],
        20 => ['ss_servscrptype_name' => 'Survey'],
    ];
}
