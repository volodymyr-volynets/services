<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Service\Category;

use Object\Table;

class Organizations extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Category Organizations';
    public $name = 'ss_service_category_organizations';
    public $pk = ['ss_servcatorg_tenant_id', 'ss_servcatorg_servcategory_id', 'ss_servcatorg_organization_id'];
    public $tenant = true;
    public $orderby = [
        'ss_servcatorg_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servcatorg_';
    public $columns = [
        'ss_servcatorg_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servcatorg_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servcatorg_servcategory_id' => ['name' => 'Category #', 'domain' => 'category_id'],
        'ss_servcatorg_organization_id' => ['name' => 'Organization #', 'domain' => 'organization_id'],
        'ss_servcatorg_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_category_organizations_pk' => ['type' => 'pk', 'columns' => ['ss_servcatorg_tenant_id', 'ss_servcatorg_servcategory_id', 'ss_servcatorg_organization_id']],
        'ss_servcatorg_servcategory_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servcatorg_tenant_id', 'ss_servcatorg_servcategory_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Categories',
            'foreign_columns' => ['ss_servcategory_tenant_id', 'ss_servcategory_id']
        ],
        'ss_servcatorg_organization_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servcatorg_tenant_id', 'ss_servcatorg_organization_id'],
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
