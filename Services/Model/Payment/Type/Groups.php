<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Payment\Type;

use Object\Data;

class Groups extends Data
{
    public $module_code = 'SS';
    public $title = 'S/S Payment Type Groups';
    public $column_key = 'ss_serpaytgrp_id';
    public $column_prefix = 'ss_serpaytgrp_';
    public $orderby;
    public $columns = [
        'ss_serpaytgrp_id' => ['name' => 'Type #', 'domain' => 'type_id'],
        'ss_serpaytgrp_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $data = [
        10 => ['ss_serpaytgrp_name' => 'Check'],
        20 => ['ss_serpaytgrp_name' => 'Wire'],
        30 => ['ss_serpaytgrp_name' => 'Cash'],
        40 => ['ss_serpaytgrp_name' => 'Credit Card'],
        50 => ['ss_serpaytgrp_name' => 'Other'],
    ];
}
