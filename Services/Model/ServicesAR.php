<?php

namespace Numbers\Services\Services\Model;
class ServicesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Services::class;

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
	public ?int $ss_service_tenant_id = NULL;

	/**
	 * Service #
	 *
	 *
	 *
	 * {domain{service_id_sequence}}
	 *
	 * @var int Domain: service_id_sequence Type: serial
	 */
	public ?int $ss_service_id = null;

	/**
	 * Code
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_service_code = null;

	/**
	 * Service Type Code
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_service_servtype_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_service_name = null;

	/**
	 * Icon
	 *
	 *
	 *
	 * {domain{icon}}
	 *
	 * @var string Domain: icon Type: varchar
	 */
	public ?string $ss_service_icon = null;

	/**
	 * Assignment Type #
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\Service\Assignment\Types}}
	 * {domain{type_id}}
	 *
	 * @var int Domain: type_id Type: smallint
	 */
	public ?int $ss_service_assignment_type_id = NULL;

	/**
	 * Category #
	 *
	 *
	 *
	 * {domain{category_id}}
	 *
	 * @var int Domain: category_id Type: integer
	 */
	public ?int $ss_service_category_id = NULL;

	/**
	 * Queue Type #
	 *
	 *
	 *
	 * {domain{type_id}}
	 *
	 * @var int Domain: type_id Type: smallint
	 */
	public ?int $ss_service_queue_type_id = NULL;

	/**
	 * Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id}}
	 *
	 * @var int Domain: service_script_id Type: integer
	 */
	public ?int $ss_service_service_script_id = NULL;

	/**
	 * Billable
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_service_billable = 0;

	/**
	 * Master Invoice
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_service_master_invoice = 0;

	/**
	 * Invoicing Details
	 *
	 *
	 *
	 * {domain{description}}
	 *
	 * @var string Domain: description Type: varchar
	 */
	public ?string $ss_service_invoicing_details = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_service_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $ss_service_optimistic_lock = 'now()';

	/**
	 * Inserted Datetime
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: timestamp
	 */
	public ?string $ss_service_inserted_timestamp = null;

	/**
	 * Inserted User #
	 *
	 *
	 *
	 * {domain{user_id}}
	 *
	 * @var int Domain: user_id Type: bigint
	 */
	public ?int $ss_service_inserted_user_id = NULL;

	/**
	 * Updated Datetime
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: timestamp
	 */
	public ?string $ss_service_updated_timestamp = null;

	/**
	 * Updated User #
	 *
	 *
	 *
	 * {domain{user_id}}
	 *
	 * @var int Domain: user_id Type: bigint
	 */
	public ?int $ss_service_updated_user_id = NULL;
}