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

class Organizations extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Organizations';
    public $name = 'ss_service_organizations';
    public $pk = ['ss_servorg_tenant_id', 'ss_servorg_service_id', 'ss_servorg_organization_id'];
    public $tenant = true;
    public $orderby = [
        'ss_servorg_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servorg_';
    public $columns = [
        'ss_servorg_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servorg_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servorg_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
        'ss_servorg_organization_id' => ['name' => 'Organization #', 'domain' => 'organization_id'],
        'ss_servorg_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_organizations_pk' => ['type' => 'pk', 'columns' => ['ss_servorg_tenant_id', 'ss_servorg_service_id', 'ss_servorg_organization_id']],
        'ss_servorg_service_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servorg_tenant_id', 'ss_servorg_service_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Services',
            'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
        ],
        'ss_servorg_organization_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servorg_tenant_id', 'ss_servorg_organization_id'],
            'foreign_model' => '\Numbers\Users\Organizations\Model\Organizations',
            'foreign_columns' => ['on_organization_tenant_id', 'on_organization_id']
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
