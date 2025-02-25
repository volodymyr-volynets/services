<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Disposition;

use Object\Data;

class Types extends Data
{
    public $module_code = 'SS';
    public $title = 'S/S ServiceScript Disposition Types';
    public $column_key = 'ss_disptype_code';
    public $column_prefix = 'ss_disptype_';
    public $columns = [
        'ss_disptype_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'ss_disptype_name' => ['name' => 'Name', 'type' => 'text']
    ];
    public $options_map = [
        'ss_disptype_name' => 'name'
    ];
    public $orderby = [
        'ss_disptype_name' => SORT_ASC
    ];
    public $data = [
        'CANCELATION_REASONS' => ['ss_disptype_name' => 'Cancellation Reasons'],
        'OTHER_REASONS' => ['ss_disptype_name' => 'Other'],
        'REINSTATE_REASONS' => ['ss_disptype_name' => 'Reinstate Reasons'],
    ];
}
