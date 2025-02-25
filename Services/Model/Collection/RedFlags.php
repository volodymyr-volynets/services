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

class RedFlags extends Collection
{
    public $data = [
        'name' => 'Red Flags',
        'model' => '\Numbers\Services\Services\Model\Service\RedFlags',
        'details' => [
            '\Numbers\Services\Services\Model\Service\RedFlag\Services' => [
                'name' => 'Services',
                'pk' => ['ss_servrdflgserv_tenant_id', 'ss_servrdflgserv_servredflag_id', 'ss_servrdflgserv_service_id'],
                'type' => '1M',
                'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgserv_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgserv_servredflag_id']
            ],
            '\Numbers\Services\Services\Model\Service\RedFlag\Statuses' => [
                'name' => 'Statuses',
                'pk' => ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servredflag_id', 'ss_servrdflgstatus_servstatus_code'],
                'type' => '1M',
                'map' => ['ss_servredflag_tenant_id' => 'ss_servrdflgstatus_tenant_id', 'ss_servredflag_id' => 'ss_servrdflgstatus_servredflag_id']
            ]
        ]
    ];
}
