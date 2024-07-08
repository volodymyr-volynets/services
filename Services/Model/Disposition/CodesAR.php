<?php

namespace Numbers\Services\Services\Model\Disposition;
class CodesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Disposition\Codes::class;

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
	public ?int $ss_disposition_tenant_id = NULL;

	/**
	 * Disposition #
	 *
	 *
	 *
	 * {domain{disposition_id_sequence}}
	 *
	 * @var int Domain: disposition_id_sequence Type: serial
	 */
	public ?int $ss_disposition_id = null;

	/**
	 * Code
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_disposition_code = null;

	/**
	 * Type
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\Disposition\Types}}
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_disposition_type_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_disposition_name = null;

	/**
	 * Icon
	 *
	 *
	 *
	 * {domain{icon}}
	 *
	 * @var string Domain: icon Type: varchar
	 */
	public ?string $ss_disposition_icon = null;

	/**
	 * Notification Emails
	 *
	 *
	 *
	 * {domain{description}}
	 *
	 * @var string Domain: description Type: varchar
	 */
	public ?string $ss_disposition_notification_emails = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_disposition_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $ss_disposition_optimistic_lock = 'now()';
}