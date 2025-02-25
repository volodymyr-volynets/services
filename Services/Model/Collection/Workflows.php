<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Collection;

use Object\Collection;

class Workflows extends Collection
{
    public $data = [
        'name' => 'Workflows',
        'model' => '\Numbers\Services\Services\Model\Workflows',
        'details' => [
            '\Numbers\Services\Services\Model\Workflow\Steps' => [
                'name' => 'Steps',
                'pk' => ['ss_servworkstep_tenant_id', 'ss_servworkstep_servworkflow_code', 'ss_servworkstep_parent_servstatus_code', 'ss_servworkstep_child_servstatus_code'],
                'type' => '1M',
                'map' => ['ss_servworkflow_tenant_id' => 'ss_servworkstep_tenant_id', 'ss_servworkflow_code' => 'ss_servworkstep_servworkflow_code']
            ],
        ]
    ];
}
