<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model;

use Object\Table;

class Workflows extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Workflows';
    public $name = 'ss_workflows';
    public $pk = ['ss_servworkflow_tenant_id', 'ss_servworkflow_code'];
    public $tenant = true;
    public $orderby = [];
    public $limit;
    public $column_prefix = 'ss_servworkflow_';
    public $columns = [
        'ss_servworkflow_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servworkflow_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'ss_servworkflow_servtype_code' => ['name' => 'Service Type Code', 'domain' => 'group_code'],
        'ss_servworkflow_name' => ['name' => 'Name', 'domain' => 'name'],
        'ss_servworkflow_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
        'ss_servworkflow_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_workflows_pk' => ['type' => 'pk', 'columns' => ['ss_servworkflow_tenant_id', 'ss_servworkflow_code']],
        'ss_servworkflow_code_un' => ['type' => 'unique', 'columns' => ['ss_servworkflow_tenant_id', 'ss_servworkflow_code']],
        'ss_servworkflow_servtype_code_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servworkflow_tenant_id', 'ss_servworkflow_servtype_code'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Types',
            'foreign_columns' => ['ss_servtype_tenant_id', 'ss_servtype_code']
        ],
    ];
    public $indexes = [
        'ss_workflows_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servworkflow_code', 'ss_servworkflow_name']],
    ];
    public $history = false;
    public $audit = [
        'map' => [
            'ss_servworkflow_tenant_id' => 'wg_audit_tenant_id',
            'ss_servworkflow_code' => 'wg_audit_servworkflow_code'
        ]
    ];
    public $optimistic_lock = true;
    public $options_map = [
        'ss_servworkflow_name' => 'name',
        'ss_servworkflow_icon' => 'icon_class',
        'ss_servworkflow_inactive' => 'inactive'
    ];
    public $options_active = [
        'ss_servworkflow_inactive' => 0
    ];
    public $engine = [
        'MySQLi' => 'InnoDB'
    ];

    public $cache = true;
    public $cache_tags = [];
    public $cache_memory = true;

    public $data_asset = [
        'classification' => 'client_confidential',
        'protection' => 2,
        'scope' => 'enterprise'
    ];
}
