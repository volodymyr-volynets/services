<?php

namespace Numbers\Services\Services\Helper;
class Filter {
	// statuses
	const F_SERVTPGRP_CODE = ['label_name' => 'Service Type Group', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Type\Groups'];
	const F_SERVTYPE_CODE = ['label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Types'];
	const F_SERVSTSGRP_CODE = ['label_name' => 'Status Group', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Status\Groups'];
	const F_SERVSTATUS_CODE = [ 'label_name' => 'Status', 'domain' => 'group_code', 'null' => true, 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'tree' => true, 'options_model' => '\Numbers\Services\Services\DataSource\Statuses::optionsJsonSingle', 'options_options' => ['i18n' => 'skip_sorting']];
	// service
	const F_SERVCATEGORY_ID = ['label_name' => 'Service Category', 'domain' => 'category_id', 'null' => true, 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Categories'];
	const F_SERVICE_ID = ['label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'percent' => 50, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Services'];
	const F_SUBSERVICE_NAME = ['label_name' => 'Subservice', 'domain' => 'name', 'null' => true, 'percent' => 50, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\SubServices', 'include_null_filter' => true];
	const F_SERVCHANNEL_ID = ['label_name' => 'Channel', 'domain' => 'channel_id', 'null' => true, 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Numbers\Services\Services\Model\Service\Channels'];
}