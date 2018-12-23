<?php

namespace Numbers\Services\Services\Model\Service\Channel;
class Map extends \Object\Table {
	public $db_link;
	public $db_link_flag;
	public $module_code = 'SS';
	public $title = 'S/S Service Channel Map';
	public $name = 'ss_service_channel_map';
	public $pk = ['ss_servchanmap_tenant_id', 'ss_servchanmap_service_id', 'ss_servchanmap_channel_id'];
	public $tenant = true;
	public $orderby = [
		'ss_servchanmap_timestamp' => SORT_ASC
	];
	public $limit;
	public $column_prefix = 'ss_servchanmap_';
	public $columns = [
		'ss_servchanmap_tenant_id' => ['name' => 'Tenant #', 'domain' => 'tenant_id'],
		'ss_servchanmap_timestamp' => ['name' => 'Timestamp', 'domain' => 'timestamp_now'],
		'ss_servchanmap_service_id' => ['name' => 'Service #', 'domain' => 'service_id'],
		'ss_servchanmap_channel_id' => ['name' => 'Channel #', 'domain' => 'channel_id'],
		'ss_servchanmap_inactive' => ['name' => 'Inactive', 'type' => 'boolean']
	];
	public $constraints = [
		'ss_service_channel_map_pk' => ['type' => 'pk', 'columns' => ['ss_servchanmap_tenant_id', 'ss_servchanmap_service_id', 'ss_servchanmap_channel_id']],
		'ss_servchanmap_service_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servchanmap_tenant_id', 'ss_servchanmap_service_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Services',
			'foreign_columns' => ['ss_service_tenant_id', 'ss_service_id']
		],
		'ss_servchanmap_channel_id_fk' => [
			'type' => 'fk',
			'columns' => ['ss_servchanmap_tenant_id', 'ss_servchanmap_channel_id'],
			'foreign_model' => '\Numbers\Services\Services\Model\Service\Channels',
			'foreign_columns' => ['ss_servchannel_tenant_id', 'ss_servchannel_id']
		]
	];
	public $indexes = [];
	public $history = false;
	public $audit = false;
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