<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Override;

class Aliases
{
    public $data = [
        'servredflag_id' => [
            'no_data_alias_name' => 'Red Flag #',
            'no_data_alias_model' => '\Numbers\Services\Services\Model\Service\RedFlags',
            'no_data_alias_column' => 'ss_servredflag_code'
        ],
        'servscript_id' => [
            'no_data_alias_name' => 'Service Script #',
            'no_data_alias_model' => '\Numbers\Services\Services\Model\ServiceScripts',
            'no_data_alias_column' => 'ss_servscript_code'
        ]
    ];
}
