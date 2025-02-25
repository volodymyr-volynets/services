<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation;

use Object\Table;

class Map extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Assignment Location Map';
    public $name = 'ss_service_assignment_location_map';
    public $pk = ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_id', 'ss_servcustlmap_location_id'];
    public $tenant = true;
    public $orderby = [
        'ss_servcustlmap_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servcustlmap_';
    public $columns = [
        'ss_servcustlmap_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servcustlmap_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servcustlmap_user_id' => ['name' => 'User #', 'domain' => 'user_id'],
        'ss_servcustlmap_organization_id' => ['name' => 'Primary Organization #', 'domain' => 'organization_id'],
        'ss_servcustlmap_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
        'ss_servcustlmap_customer_id' => ['name' => 'Customer #', 'domain' => 'customer_id'],
        'ss_servcustlmap_location_id' => ['name' => 'Location #', 'domain' => 'location_id'],
        'ss_servcustlmap_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_assignment_location_map_pk' => ['type' => 'pk', 'columns' => ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_id', 'ss_servcustlmap_location_id']],
        'ss_servcustlmap_customer_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_user_id', 'ss_servcustlmap_organization_id', 'ss_servcustlmap_service_id', 'ss_servcustlmap_customer_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations',
            'foreign_columns' => ['ss_servcustloc_tenant_id', 'ss_servcustloc_user_id', 'ss_servcustloc_organization_id', 'ss_servcustloc_service_id', 'ss_servcustloc_customer_id']
        ],
        'ss_servcustlmap_location_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servcustlmap_tenant_id', 'ss_servcustlmap_location_id'],
            'foreign_model' => '\Numbers\Users\Organizations\Model\Locations',
            'foreign_columns' => ['on_location_tenant_id', 'on_location_id']
        ],
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
