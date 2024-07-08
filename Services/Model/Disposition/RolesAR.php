<?php

namespace Numbers\Services\Services\Model\Disposition;
class RolesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Disposition\Roles::class;

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
	public ?int $ss_disprol_tenant_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_disprol_timestamp = 'now()';

	/**
	 * Disposition #
	 *
	 *
	 *
	 * {domain{disposition_id}}
	 *
	 * @var int Domain: disposition_id Type: integer
	 */
	public ?int $ss_disprol_disposition_id = NULL;

	/**
	 * Role #
	 *
	 *
	 *
	 * {domain{role_id}}
	 *
	 * @var int Domain: role_id Type: integer
	 */
	public ?int $ss_disprol_role_id = NULL;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_disprol_inactive = 0;
}