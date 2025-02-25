<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Payment\Type;

use Object\Table;

class ServiceTypes extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Payment Type Service Types';
    public $name = 'ss_payment_type_service_types';
    public $pk = ['ss_serpaytservtype_tenant_id', 'ss_serpaytservtype_serpaytype_code', 'ss_serpaytservtype_servtype_code'];
    public $tenant = true;
    public $orderby = [
        'ss_serpaytservtype_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_serpaytservtype_';
    public $columns = [
        'ss_serpaytservtype_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_serpaytservtype_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_serpaytservtype_serpaytype_code' => ['name' => 'Payment Type Code', 'domain' => 'type_code'],
        'ss_serpaytservtype_servtype_code' => ['name' => 'Service Type Code', 'domain' => 'group_code'],
        'ss_serpaytservtype_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_payment_type_service_types_pk' => ['type' => 'pk', 'columns' => ['ss_serpaytservtype_tenant_id', 'ss_serpaytservtype_serpaytype_code', 'ss_serpaytservtype_servtype_code']],
        'ss_serpaytservtype_serpaytype_code_fk' => [
            'type' => 'fk',
            'columns' => ['ss_serpaytservtype_tenant_id', 'ss_serpaytservtype_serpaytype_code'],
            'foreign_model' => '\Numbers\Services\Services\Model\Payment\Types',
            'foreign_columns' => ['ss_serpaytype_tenant_id', 'ss_serpaytype_code']
        ],
        'ss_serpaytservtype_servtype_code_fk' => [
            'type' => 'fk',
            'columns' => ['ss_serpaytservtype_tenant_id', 'ss_serpaytservtype_servtype_code'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Types',
            'foreign_columns' => ['ss_servtype_tenant_id', 'ss_servtype_code']
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
