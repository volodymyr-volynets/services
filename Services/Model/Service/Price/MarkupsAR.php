<?php

namespace Numbers\Services\Services\Model\Service\Price;
class MarkupsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Service\Price\Markups::class;

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
	public ?int $ss_servprcmarkup_tenant_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servprcmarkup_timestamp = 'now()';

	/**
	 * Service #
	 *
	 *
	 *
	 * {domain{service_id}}
	 *
	 * @var int Domain: service_id Type: integer
	 */
	public ?int $ss_servprcmarkup_service_id = NULL;

	/**
	 * Currency Code
	 *
	 *
	 *
	 * {domain{currency_code}}
	 *
	 * @var string Domain: currency_code Type: char
	 */
	public ?string $ss_servprcmarkup_currency_code = null;

	/**
	 * Detail #
	 *
	 *
	 *
	 * {domain{group_id}}
	 *
	 * @var int Domain: group_id Type: integer
	 */
	public ?int $ss_servprcmarkup_detail_id = NULL;

	/**
	 * Under Amount
	 *
	 *
	 *
	 * {domain{amount}}
	 *
	 * @var bcnumeric Domain: amount Type: bcnumeric
	 */
	public ?bcnumeric $ss_servprcmarkup_under_amount = '0.00';

	/**
	 * Type
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\Service\Price\Types}}
	 * {domain{type_id}}
	 *
	 * @var int Domain: type_id Type: smallint
	 */
	public ?int $ss_servprcmarkup_type_id = NULL;

	/**
	 * Markup
	 *
	 *
	 *
	 * {domain{amount}}
	 *
	 * @var bcnumeric Domain: amount Type: bcnumeric
	 */
	public ?bcnumeric $ss_servprcmarkup_markup = '0.00';

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servprcmarkup_inactive = 0;
}