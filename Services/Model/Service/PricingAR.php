<?php

namespace Numbers\Services\Services\Model\Service;
class PricingAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Service\Pricing::class;

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
	public ?int $ss_servprice_tenant_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servprice_timestamp = 'now()';

	/**
	 * Service #
	 *
	 *
	 *
	 * {domain{service_id}}
	 *
	 * @var int Domain: service_id Type: integer
	 */
	public ?int $ss_servprice_service_id = NULL;

	/**
	 * Currency Code
	 *
	 *
	 *
	 * {domain{currency_code}}
	 *
	 * @var string Domain: currency_code Type: char
	 */
	public ?string $ss_servprice_currency_code = null;

	/**
	 * Cost Amount
	 *
	 *
	 *
	 * {domain{amount}}
	 *
	 * @var bcnumeric Domain: amount Type: bcnumeric
	 */
	public ?bcnumeric $ss_servprice_cost_amount = '0.00';

	/**
	 * Minimum Cost
	 *
	 *
	 *
	 * {domain{amount}}
	 *
	 * @var bcnumeric Domain: amount Type: bcnumeric
	 */
	public ?bcnumeric $ss_servprice_cost_minimum = '0.00';

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servprice_inactive = 0;
}