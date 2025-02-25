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

class StatusExtended extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Status Extended';
    public $name = 'ss_service_status_extended';
    public $pk = ['ss_servstatex_tenant_id', 'ss_servstatex_servstatus_code', 'ss_servstatex_code'];
    public $tenant = true;
    public $orderby = ['ss_servstatex_weight' => SORT_ASC];
    public $limit;
    public $column_prefix = 'ss_servstatex_';
    public $columns = [
        'ss_servstatex_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servstatex_servstatus_code' => ['name' => 'Status Code', 'domain' => 'group_code'],
        'ss_servstatex_code' => ['name' => 'Code', 'domain' => 'group_code'],
        'ss_servstatex_name' => ['name' => 'Name', 'domain' => 'name'],
        'ss_servstatex_weight' => ['name' => 'Weight', 'domain' => 'weight', 'null' => true],
        'ss_servstatex_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_status_extended_pk' => ['type' => 'pk', 'columns' => ['ss_servstatex_tenant_id', 'ss_servstatex_servstatus_code', 'ss_servstatex_code']],
        'ss_servstatex_servstatus_code_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servstatex_tenant_id', 'ss_servstatex_servstatus_code'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Statuses',
            'foreign_columns' => ['ss_servstatus_tenant_id', 'ss_servstatus_code']
        ],
    ];
    public $indexes = [
        'ss_service_status_extended_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servstatex_code', 'ss_servstatex_name']],
    ];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = true;
    public $options_map = [
        'ss_servstatex_name' => 'name',
        'ss_servstatex_inactive' => 'inactive'
    ];
    public $options_active = [
        'ss_servstatex_inactive' => 0
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

    public static $cached_statuses;

    /**
     * Get status name
     *
     * @param string $code
     * @return string
     */
    public static function getStatusName(string $code): string
    {
        if (!isset(self::$cached_statuses)) {
            self::$cached_statuses = self::optionsStatic(['i18n' => true]);
        }
        if (!empty($code)) {
            return self::$cached_statuses[$code]['name'];
        }
        return '';
    }
}
