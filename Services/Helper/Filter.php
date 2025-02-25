<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Helper;

class Filter
{
    // statuses
    public const F_SERVTPGRP_CODE = ['label_name' => 'Service Type Group', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Type\Groups'];
    public const F_SERVTYPE_CODE = ['label_name' => 'Service Type', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Types'];
    public const F_SERVSTSGRP_CODE = ['label_name' => 'Status Group', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Status\Groups'];
    public const F_SERVSTATUS_CODE = [ 'label_name' => 'Status', 'domain' => 'group_code', 'null' => true, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'tree' => true, 'options_model' => '\Numbers\Services\Services\DataSource\Statuses::optionsJsonSingle', 'options_options' => ['i18n' => 'skip_sorting']];
    // service
    public const F_SERVCATEGORY_ID = ['label_name' => 'Service Category', 'domain' => 'category_id', 'null' => true, 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\Categories'];
    public const F_SERVICE_ID = ['label_name' => 'Service', 'domain' => 'service_id', 'null' => true, 'percent' => 50, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Services'];
    public const F_SUBSERVICE_NAME = ['label_name' => 'Subservice', 'domain' => 'name', 'null' => true, 'percent' => 50, 'method' => 'select', 'searchable' => true, 'options_model' => '\Numbers\Services\Services\Model\Service\SubServices', 'include_null_filter' => true];
    public const F_SERVCHANNEL_ID = ['label_name' => 'Channel', 'domain' => 'channel_id', 'null' => true, 'percent' => 50, 'method' => 'multiselect', 'multiple_column' => 1, 'options_model' => '\Numbers\Services\Services\Model\Service\Channels'];
}
