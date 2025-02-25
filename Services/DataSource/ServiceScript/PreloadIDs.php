<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\DataSource\ServiceScript;

use Numbers\Services\Services\Model\Service\Channels;
use Numbers\Users\Organizations\Model\Locations;
use Numbers\Users\Organizations\Model\Queue\Types;
use Object\DataSource;

class PreloadIDs extends DataSource
{
    public $db_link;
    public $db_link_flag;
    public $pk = ['service_code'];
    public $columns;
    public $orderby;
    public $limit;
    public $single_row = true;
    public $single_value;
    public $options_map = [];
    public $options_active = [];
    public $column_prefix = '';

    public $cache = true;
    public $cache_tags = [];
    public $cache_memory = true;

    public $primary_model = '\Numbers\Services\Services\Model\Services';
    public $parameters = [
        'service_id' => ['name' => 'Service #', 'domain' => 'service_id', 'required' => true],
        'location_id' => ['name' => 'Location #', 'domain' => 'location_id'],
        'channel_code' => ['name' => 'Channel Code', 'domain' => 'group_code'],
    ];

    public function query($parameters, $options = [])
    {
        $this->query->columns([
            'service_id' => 'a.ss_service_id',
            'service_code' => 'a.ss_service_code',
            'service_script_id' => 'a.ss_service_service_script_id',
            'queue_type_id' => 'a.ss_service_queue_type_id',
            'queue_method_id' => 'd.on_quetype_method_id',
            'assignment_type_id' => 'a.ss_service_assignment_type_id',
            'type_code' => 'a.ss_service_servtype_code',
        ]);
        // join
        if (!empty($parameters['channel_code'])) {
            $this->query->join('INNER', new Channels(), 'b', 'ON', [
                ['AND', ['b.ss_servchannel_code', '=', $parameters['channel_code'], false], false]
            ]);
            $this->query->columns([
                'service_channel_id' => 'b.ss_servchannel_id'
            ]);
        }
        if (!empty($parameters['location_id'])) {
            $this->query->join('INNER', new Locations(), 'c', 'ON', [
                ['AND', ['c.on_location_id', '=', $parameters['location_id'], false], false]
            ]);
            $this->query->columns([
                'location_region_id' => 'c.on_location_region_id'
            ]);
        }
        $this->query->join('INNER', new Types(), 'd', 'ON', [
            ['AND', ['a.ss_service_queue_type_id', '=', 'd.on_quetype_id', true], false]
        ]);
        // where
        $this->query->where('AND', ['a.ss_service_id', '=', $parameters['service_id']]);
    }
}
