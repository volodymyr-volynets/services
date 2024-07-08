<?php

namespace Numbers\Services\Services\Model\Service;
class RedFlagsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlags::class;

	/**
	 * Constructing object
	 *
	 * @param array $options
	 *		skip_db_object
	 *		skip_table_object
	 */
	public function __construct($options = []) {
		if (empty($options['skip_table_object'])) {
			$this->object_table_object = new $this->object_table_class($options);
		}
	}
	/**
	 * Tenant #
	 *
	 *
	 *
	 * {domain{tenant_id}}
	 *
	 * @var int Domain: tenant_id Type: integer
	 */
	public ?int $ss_servredflag_tenant_id = NULL;

	/**
	 * Red Flag #
	 *
	 *
	 *
	 * {domain{group_id_sequence}}
	 *
	 * @var int Domain: group_id_sequence Type: serial
	 */
	public ?int $ss_servredflag_id = null;

	/**
	 * Code
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_servredflag_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_servredflag_name = null;

	/**
	 * Business Hours
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servredflag_business = 0;

	/**
	 * Interval
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: interval
	 */
	public ?string $ss_servredflag_interval = null;

	/**
	 * Date Type Code
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_servredflag_servdatetype_code = null;

	/**
	 * Red Flag Status
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_servredflag_red_flag_servstatus_code = null;

	/**
	 * Where
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: text
	 */
	public ?string $ss_servredflag_where = null;

	/**
	 * All Services
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servredflag_all_services = 0;

	/**
	 * Type #
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\Service\RedFlag\Types}}
	 * {domain{type_id}}
	 *
	 * @var int Domain: type_id Type: smallint
	 */
	public ?int $ss_servredflag_type_id = 10;

	/**
	 * Before
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servredflag_before = 0;

	/**
	 * Notification Module #
	 *
	 *
	 *
	 * {domain{module_id}}
	 *
	 * @var int Domain: module_id Type: integer
	 */
	public ?int $ss_servredflag_notification_module_id = NULL;

	/**
	 * Notification Feature Code
	 *
	 *
	 *
	 * {domain{feature_code}}
	 *
	 * @var string Domain: feature_code Type: varchar
	 */
	public ?string $ss_servredflag_notification_feature_code = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servredflag_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $ss_servredflag_optimistic_lock = 'now()';
}