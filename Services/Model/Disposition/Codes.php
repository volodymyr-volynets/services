<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Disposition;

use Object\Table;

class Codes extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Disposition Codes';
    public $schema;
    public $name = 'ss_disposition_codes';
    public $pk = ['ss_disposition_tenant_id', 'ss_disposition_id'];
    public $tenant = true;
    public $orderby;
    public $limit;
    public $column_prefix = 'ss_disposition_';
    public $columns = [
        'ss_disposition_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_disposition_id' => ['name' => 'Disposition #', 'domain' => 'disposition_id_sequence'],
        'ss_disposition_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'ss_disposition_type_code' => ['name' => 'Type', 'domain' => 'group_code', 'options_model' => '\Numbers\Services\Services\Model\Disposition\Types'],
        'ss_disposition_name' => ['name' => 'Name', 'domain' => 'name'],
        'ss_disposition_icon' => ['name' => 'Icon', 'domain' => 'icon', 'null' => true],
        'ss_disposition_notification_emails' => ['name' => 'Notification Emails', 'domain' => 'description', 'null' => true],
        'ss_disposition_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_disposition_codes_pk' => ['type' => 'pk', 'columns' => ['ss_disposition_tenant_id', 'ss_disposition_id']],
        'ss_disposition_code_un' => ['type' => 'unique', 'columns' => ['ss_disposition_tenant_id', 'ss_disposition_code']],
    ];
    public $indexes = [
        'ss_disposition_codes_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_disposition_code', 'ss_disposition_name']],
    ];
    public $history = false;
    public $audit = [
        'map' => [
            'ss_disposition_tenant_id' => 'wg_audit_tenant_id',
            'ss_disposition_id' => 'wg_audit_disposition_id'
        ]
    ];
    public $optimistic_lock = true;
    public $options_map = [
        'ss_disposition_name' => 'name',
        'ss_disposition_icon' => 'icon_class',
        'ss_disposition_inactive' => 'inactive'
    ];
    public $options_active = [
        'ss_disposition_inactive' => 0
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
