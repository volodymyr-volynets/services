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

use Object\Table;

class Statuses extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Red Flag Statuses';
    public $schema;
    public $name = 'ss_service_red_flag_statuses';
    public $pk = ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servredflag_id', 'ss_servrdflgstatus_servstatus_code'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'ss_servrdflgstatus_';
    public $columns = [
        'ss_servrdflgstatus_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servrdflgstatus_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servrdflgstatus_servredflag_id' => ['name' => 'Red Flag #', 'domain' => 'group_id'],
        'ss_servrdflgstatus_servstatus_code' => ['name' => 'Status', 'domain' => 'group_code'],
        'ss_servrdflgstatus_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_red_flag_statuses_pk' => ['type' => 'pk', 'columns' => ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servredflag_id', 'ss_servrdflgstatus_servstatus_code']],
        'ss_servrdflgstatus_servstatus_code_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servstatus_code'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Statuses',
            'foreign_columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_code']
        ],
        'ss_servrdflgstatus_servredflag_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servrdflgstatus_tenant_id', 'ss_servrdflgstatus_servredflag_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\RedFlags',
            'foreign_columns' => ['ss_servredflag_tenant_id', 'ss_servredflag_id']
        ],
    ];
    public $indexes = [];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = false;
    public $options_map = [];
    public $options_active = [];
    public $options_skip_i18n = true;
    public $engine = [
        'MySQLi' => 'InnoDB'
    ];

    public $cache = false;
    public $cache_tags = [];
    public $cache_memory = false;

    public $data_asset = [
        'classification' => 'client_confidential',
        'protection' => 2,
        'scope' => 'enterprise'
    ];
}
