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

class SubServices extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Sub Services';
    public $name = 'ss_service_sub_services';
    public $pk = ['ss_servsubserv_tenant_id', 'ss_servsubserv_service_id', 'ss_servsubserv_name'];
    public $tenant = true;
    public $orderby = [
        'ss_servsubserv_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servsubserv_';
    public $columns = [
        'ss_servsubserv_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servsubserv_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servsubserv_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
        'ss_servsubserv_name' => ['name' => 'Name', 'domain' => 'name'],
        'ss_servsubserv_default' => ['name' => 'Default', 'type' => 'boolean'],
        'ss_servsubserv_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_sub_services_pk' => ['type' => 'pk', 'columns' => ['ss_servsubserv_tenant_id', 'ss_servsubserv_service_id', 'ss_servsubserv_name']],
        'ss_servsubserv_service_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servsubserv_tenant_id', 'ss_servsubserv_service_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Services',
            'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
        ]
    ];
    public $indexes = [];
    public $history = false;
    public $audit = false;
    public $options_map = [
        'ss_servsubserv_name' => 'name',
        'ss_servsubserv_inactive' => 'inactve'
    ];
    public $options_active = [
        'ss_servsubserv_inactive' => 0
    ];
    public $engine = [
        'MySQLi' => 'InnoDB'
    ];

    public $cache = true;
    public $cache_tags = [];
    public $cache_memory = false;

    public $data_asset = [
        'classification' => 'client_confidential',
        'protection' => 2,
        'scope' => 'enterprise'
    ];
}
