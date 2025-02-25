<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\DataSource;

use Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations;
use Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map;
use Numbers\Services\Services\Model\Service\Organizations;
use Object\DataSource;

class Services extends DataSource
{
    public $db_link;
    public $db_link_flag;
    public $pk = ['ss_service_id'];
    public $columns;
    public $orderby;
    public $limit;
    public $single_row;
    public $single_value;
    public $options_map = [
        'ss_service_name' => 'name',
        'ss_service_icon' => 'icon_class',
        'ss_service_inactive' => 'inactive',
    ];
    public $options_active = [
        'ss_service_inactive' => 0
    ];
    public $column_prefix = 'ss_service_';

    public $cache = false;
    public $cache_tags = [];
    public $cache_memory = false;

    public $primary_model = '\Numbers\Services\Services\Model\Services';
    public $parameters = [
        'selected_organizations' => ['name' => 'Selected Organizations', 'domain' => 'organization_id', 'multiple_column' => true, 'required' => true],
        'customer_id' => ['name' => 'Customer', 'domain' => 'customer_id'],
        'location_id' => ['name' => 'Location', 'domain' => 'location_id'],
        'existing_values' => ['name' => 'Existing Values', 'type' => 'mixed'],
        'enforce_service_assignment' => ['name' => 'Enforce Service Assignment', 'type' => 'boolean'],
    ];

    public function query($parameters, $options = [])
    {
        // columns
        $this->query->columns([
            'ss_service_id' => 'a.ss_service_id',
            'ss_service_code' => 'a.ss_service_code',
            'ss_service_servtype_code' => 'a.ss_service_servtype_code',
            'ss_service_name' => 'a.ss_service_name',
            'ss_service_icon' => 'a.ss_service_icon',
            'ss_service_inactive' => 'a.ss_service_inactive'
        ]);
        // selected organizations
        if (!empty($parameters['selected_organizations'])) {
            $this->query->where('AND', function (& $query) use ($parameters) {
                // allow existing values
                if (!empty($parameters['existing_values'])) {
                    $query->where('OR', ['a.ss_service_id', '=', $parameters['existing_values']]);
                }
                $query->where('OR', function (& $query) use ($parameters) {
                    $query = Organizations::queryBuilderStatic(['alias' => 'inner_p'])->select();
                    $query->columns(1);
                    $query->where('AND', ['inner_p.ss_servorg_service_id', '=', 'a.ss_service_id', true]);
                    $query->where('AND', ['inner_p.ss_servorg_organization_id', '=', $parameters['selected_organizations']]);
                }, true);
            });
        }
        // service assignment
        if (!empty($parameters['enforce_service_assignment'])) {
            // customer / location assignment
            $this->query->where('AND', function (& $query) use ($parameters) {
                // allow existing values
                if (!empty($parameters['existing_values'])) {
                    $query->where('OR', ['a.ss_service_id', '=', $parameters['existing_values']]);
                }
                $query->where('OR', function (& $query) use ($parameters) {
                    $query = Map::queryBuilderStatic(['alias' => 'inner_o'])->select();
                    $query->columns(1);
                    $query->join('INNER', new Locations(), 'inner_o2', 'ON', [
                        ['AND', ['inner_o.ss_servcustlmap_user_id', '=', 'inner_o2.ss_servcustloc_user_id', true], false],
                        ['AND', ['inner_o.ss_servcustlmap_organization_id', '=', 'inner_o2.ss_servcustloc_organization_id', true], false],
                        ['AND', ['inner_o.ss_servcustlmap_service_id', '=', 'inner_o2.ss_servcustloc_service_id', true], false],
                        ['AND', ['inner_o.ss_servcustlmap_customer_id', '=', 'inner_o2.ss_servcustloc_customer_id', true], false],
                    ]);
                    $query->where('AND', ['inner_o.ss_servcustlmap_location_id', '=', $parameters['location_id']]);
                    $query->where('AND', ['inner_o.ss_servcustlmap_service_id', '=', 'a.ss_service_id', true]);
                    $query->where('AND', ['inner_o.ss_servcustlmap_organization_id', '=', $parameters['selected_organizations']]);
                    $query->where('AND', ['inner_o.ss_servcustlmap_customer_id', '=', $parameters['customer_id']]);
                    $query->where('AND', ['inner_o.ss_servcustlmap_inactive', '=', 0]);
                    $query->where('AND', ['inner_o2.ss_servcustloc_inactive', '=', 0]);
                }, 'EXISTS');
            });
        }
    }
}
