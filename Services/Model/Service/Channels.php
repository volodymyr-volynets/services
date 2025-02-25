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

class Channels extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Channels';
    public $name = 'ss_service_channels';
    public $pk = ['ss_servchannel_tenant_id', 'ss_servchannel_id'];
    public $tenant = true;
    public $orderby = [];
    public $limit;
    public $column_prefix = 'ss_servchannel_';
    public $columns = [
        'ss_servchannel_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servchannel_id' => ['name' => 'Channel #', 'domain' => 'channel_id_sequence'],
        'ss_servchannel_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'ss_servchannel_name' => ['name' => 'Name', 'domain' => 'name'],
        'ss_servchannel_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
        'ss_servchannel_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_channels_pk' => ['type' => 'pk', 'columns' => ['ss_servchannel_tenant_id', 'ss_servchannel_id']],
        'ss_servchannel_code_un' => ['type' => 'unique', 'columns' => ['ss_servchannel_tenant_id', 'ss_servchannel_code']],
    ];
    public $indexes = [
        'ss_service_channels_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servchannel_code', 'ss_servchannel_name']],
    ];
    public $history = false;
    public $audit = [
        'map' => [
            'ss_servchannel_tenant_id' => 'wg_audit_tenant_id',
            'ss_servchannel_id' => 'wg_audit_channel_id'
        ]
    ];
    public $optimistic_lock = true;
    public $options_map = [
        'ss_servchannel_name' => 'name',
        'ss_servchannel_icon' => 'icon_class',
        'ss_servchannel_inactive' => 'inactive'
    ];
    public $options_active = [
        'ss_servchannel_inactive' => 0
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
