<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Model\ServiceScript\Question;

use Object\Table;

class Channels extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Script Channels';
    public $schema;
    public $name = 'ss_service_script_question_channels';
    public $pk = ['ss_servqueschan_tenant_id', 'ss_servqueschan_service_script_id', 'ss_servqueschan_question_id', 'ss_servqueschan_channel_id'];
    public $tenant = true;
    public $orderby = [
        'ss_servqueschan_timestamp' => SORT_ASC
    ];
    public $limit;
    public $column_prefix = 'ss_servqueschan_';
    public $columns = [
        'ss_servqueschan_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servqueschan_service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id'],
        'ss_servqueschan_question_id' => ['name' => 'Question #', 'domain' => 'question_id'],
        'ss_servqueschan_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
        'ss_servqueschan_channel_id' => ['name' => 'Channel #', 'domain' => 'channel_id'],
        'ss_servqueschan_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
    ];
    public $constraints = [
        'ss_service_script_question_channels_pk' => ['type' => 'pk', 'columns' => ['ss_servqueschan_tenant_id', 'ss_servqueschan_service_script_id', 'ss_servqueschan_question_id', 'ss_servqueschan_channel_id']],
        'ss_servqueschan_question_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servqueschan_tenant_id', 'ss_servqueschan_service_script_id', 'ss_servqueschan_question_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\ServiceScript\Questions',
            'foreign_columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_id']
        ],
        'ss_servqueschan_channel_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servqueschan_tenant_id', 'ss_servqueschan_channel_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\Service\Channels',
            'foreign_columns' => ['ss_servchannel_tenant_id', 'ss_servchannel_id']
        ]
    ];
    public $indexes = [];
    public $history = false;
    public $audit = false;
    public $optimistic_lock = false;
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
