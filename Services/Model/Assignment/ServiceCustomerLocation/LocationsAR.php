<?php

namespace Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation;
class LocationsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Locations::class;

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
	public ?int $ss_servcustloc_tenant_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servcustloc_timestamp = 'now()';

	/**
	 * User #
	 *
	 *
	 *
	 * {domain{user_id}}
	 *
	 * @var int Domain: user_id Type: bigint
	 */
	public ?int $ss_servcustloc_user_id = NULL;

	/**
	 * Primary Organization #
	 *
	 *
	 *
	 * {domain{organization_id}}
	 *
	 * @var int Domain: organization_id Type: integer
	 */
	public ?int $ss_servcustloc_organization_id = NULL;

	/**
	 * Service #
	 *
	 *
	 *
	 * {domain{service_id}}
	 *
	 * @var int Domain: service_id Type: integer
	 */
	public ?int $ss_servcustloc_service_id = NULL;

	/**
	 * Customer #
	 *
	 *
	 *
	 * {domain{customer_id}}
	 *
	 * @var int Domain: customer_id Type: bigint
	 */
	public ?int $ss_servcustloc_customer_id = NULL;

	/**
	 * Priority Percent
	 *
	 *
	 *
	 * {domain{amount}}
	 *
	 * @var bcnumeric Domain: amount Type: bcnumeric
	 */
	public ?bcnumeric $ss_servcustloc_priority_percent = '0.00';

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servcustloc_inactive = 0;
}