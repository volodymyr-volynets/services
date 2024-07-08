<?php

namespace Numbers\Services\Services\Model\Service;
class OrganizationsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Service\Organizations::class;

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
	public ?int $ss_servorg_tenant_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servorg_timestamp = 'now()';

	/**
	 * Service #
	 *
	 *
	 *
	 * {domain{service_id}}
	 *
	 * @var int Domain: service_id Type: integer
	 */
	public ?int $ss_servorg_service_id = NULL;

	/**
	 * Organization #
	 *
	 *
	 *
	 * {domain{organization_id}}
	 *
	 * @var int Domain: organization_id Type: integer
	 */
	public ?int $ss_servorg_organization_id = NULL;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servorg_inactive = 0;
}