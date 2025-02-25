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

class SentReminders extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Red Flag Sent Reminders';
    public $schema;
    public $name = 'ss_service_red_flag_sent_reminders';
    public $pk = ['ss_servrdflgssentrems_tenant_id', 'ss_servrdflgssentrems_servredflag_id', 'ss_servrdflgssentrems_hash'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'ss_servrdflgssentrems_';
    public $columns = [
        'ss_servrdflgssentrems_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servrdflgssentrems_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servrdflgssentrems_servredflag_id' => ['name' => 'Red Flag #', 'domain' => 'group_id'],
        'ss_servrdflgssentrems_hash' => ['name' => 'Hash', 'domain' => 'hash'],
    ];
    public $constraints = [
        'ss_service_red_flag_sent_reminders_pk' => ['type' => 'pk', 'columns' => ['ss_servrdflgssentrems_tenant_id', 'ss_servrdflgssentrems_servredflag_id', 'ss_servrdflgssentrems_hash']],
        'ss_servrdflgssentrems_servredflag_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servrdflgssentrems_tenant_id', 'ss_servrdflgssentrems_servredflag_id'],
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
