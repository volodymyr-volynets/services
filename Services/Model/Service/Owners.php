<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Service;

use Object\Table;

class Owners extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Owners';
    public $name = 'ss_service_owners';
    public $pk = ['ss_servowner_tenant_id', 'ss_servowner_service_id', 'ss_servowner_ownertype_id', 'ss_servowner_user_id'];
    public $tenant = true;
    public $orderby = [
        'ss_servowner_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servowner_';
    public $columns = [
        'ss_servowner_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servowner_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servowner_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
        'ss_servowner_ownertype_id' => ['name' => 'Owner Type #', 'domain' => 'type_id'],
        'ss_servowner_user_id' => ['name' => 'User #', 'domain' => 'user_id'],
        'ss_servowner_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_owners_pk' => ['type' => 'pk', 'columns' => ['ss_servowner_tenant_id', 'ss_servowner_service_id', 'ss_servowner_ownertype_id', 'ss_servowner_user_id']],
        'ss_servowner_service_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servowner_tenant_id', 'ss_servowner_service_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Services',
            'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
        ],
        'ss_servowner_user_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servowner_tenant_id', 'ss_servowner_user_id'],
            'foreign_model' => '\Numbers\Users\Users\Model\Users',
            'foreign_columns' => ['um_user_tenant_id', 'um_user_id']
        ],
        'ss_servowner_ownertype_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servowner_tenant_id', 'ss_servowner_ownertype_id'],
            'foreign_model' => '\Numbers\Users\Users\Model\User\Owner\Types',
            'foreign_columns' => ['um_ownertype_tenant_id', 'um_ownertype_id']
        ]
    ];
    public $indexes = [];
    public $history = false;
    public $audit = false;
    public $options_map = [];
    public $options_active = [];
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
