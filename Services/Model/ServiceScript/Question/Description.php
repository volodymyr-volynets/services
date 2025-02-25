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

class Description extends Table
{
    public $db_link;
    public $db_link_flag;
    public $module_code = 'SS';
    public $title = 'S/S Service Script Description';
    public $schema;
    public $name = 'ss_service_script_question_description';
    public $pk = ['ss_servquesdesc_tenant_id', 'ss_servquesdesc_service_script_id', 'ss_servquesdesc_question_id'];
    public $tenant = true;
    public $orderby = [];
    public $limit;
    public $column_prefix = 'ss_servquesdesc_';
    public $columns = [
        'ss_servquesdesc_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
        'ss_servquesdesc_service_script_id' => ['name' => 'Service Script #', 'domain' => 'service_script_id'],
        'ss_servquesdesc_question_id' => ['name' => 'Question #', 'domain' => 'question_id'],
        'ss_servquesdesc_description' => ['name' => 'Description', 'domain' => 'description'],
    ];
    public $constraints = [
        'ss_service_script_question_description_pk' => ['type' => 'pk', 'columns' => ['ss_servquesdesc_tenant_id', 'ss_servquesdesc_service_script_id', 'ss_servquesdesc_question_id']],
        'ss_servquesdesc_question_id_fk' => [
            'type' => 'fk',
            'columns' => ['ss_servquesdesc_tenant_id', 'ss_servquesdesc_service_script_id', 'ss_servquesdesc_question_id'],
            'foreign_model' => '\Numbers\Services\Services\Model\ServiceScript\Questions',
            'foreign_columns' => ['ss_servquestion_tenant_id', 'ss_servquestion_service_script_id', 'ss_servquestion_id']
        ]
    ];
    public $indexes = [
        'ss_service_script_question_description_fulltext_idx' => ['type' => 'fulltext', 'columns' => ['ss_servquesdesc_description']],
    ];
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
