<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\Service\Price;

use Object\Table;

class Markups extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Price Markups';
    public $name = 'ss_service_price_markups';
    public $pk = ['ss_servprcmarkup_tenant_id', 'ss_servprcmarkup_service_id', 'ss_servprcmarkup_currency_code', 'ss_servprcmarkup_detail_id'];
    public $tenant = true;
    public $orderby = [
        'ss_servprcmarkup_under_amount' => SORT_DESC
    ];
    public $limit;
    public $column_prefix = 'ss_servprcmarkup_';
    public $columns = [
        'ss_servprcmarkup_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servprcmarkup_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servprcmarkup_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
        'ss_servprcmarkup_currency_code' => ['name' => 'Currency Code', 'domain' => 'currency_code'],
        'ss_servprcmarkup_detail_id' => ['name' => 'Detail #', 'domain' => 'group_id'],
        'ss_servprcmarkup_under_amount' => ['name' => 'Under Amount', 'domain' => 'amount'],
        'ss_servprcmarkup_type_id' => ['name' => 'Type', 'domain' => 'type_id', 'options_model' => '\Numbers\Services\Services\Model\Service\Price\Types'],
        'ss_servprcmarkup_markup' => ['name' => 'Markup', 'domain' => 'amount'],
        'ss_servprcmarkup_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_price_markups_pk' => ['type' => 'pk', 'columns' => ['ss_servprcmarkup_tenant_id', 'ss_servprcmarkup_service_id', 'ss_servprcmarkup_currency_code', 'ss_servprcmarkup_detail_id']],
        'ss_servprcmarkup_currency_code_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servprcmarkup_tenant_id', 'ss_servprcmarkup_service_id', 'ss_servprcmarkup_currency_code'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Pricing',
            'foreign_columns' => ['ss_servprice_tenant_id', 'ss_servprice_service_id', 'ss_servprice_currency_code']
        ]
    ];
    public $indexes = [];
    public $history = false;
    public $audit = [];
    public $optimistic_lock = false;
    public $options_map = [];
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
