<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\ServiceScript\Presets;

use Object\Table;

class Levels extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Levels Presets';
    public $schema;
    public $name = 'ss_service_script_levels_presets';
    public $pk = ['ss_servquestion_tenant_id', 'ss_servquestion_name'];
    public $tenant = true;
    public $orderby = [
        'ss_servquestion_name' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servquestion_';
    public $columns = [
        'ss_servquestion_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servquestion_name' => ['name' => 'Type', 'domain' => 'name'],
    ];
    public $constraints = [
        'ss_service_script_levels_presets_pk' => ['type' => 'pk', 'columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_name']],
    ];
    public $indexes = [];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = false;
    public $options_map = [
        'ss_servquestion_name' => 'name',
    ];
    public $options_active = [];
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
