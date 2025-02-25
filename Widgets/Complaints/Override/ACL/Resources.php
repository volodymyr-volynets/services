<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Widgets\Complaints\Override\ACL;

class Resources
{
    public $data = [
        'widgets' => [
            'complaints' => [
                'model' => '\Numbers\Services\Widgets\Complaints\Model\Virtual\Complaints'
            ]
        ]
    ];
}
