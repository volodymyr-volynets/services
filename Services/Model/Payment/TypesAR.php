<?php

namespace Numbers\Services\Services\Model\Payment;
class TypesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Payment\Types::class;

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
	public ?int $ss_serpaytype_tenant_id = NULL;

	/**
	 * Code
	 *
	 *
	 *
	 * {domain{type_code}}
	 *
	 * @var string Domain: type_code Type: varchar
	 */
	public ?string $ss_serpaytype_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_serpaytype_name = null;

	/**
	 * Icon
	 *
	 *
	 *
	 * {domain{icon}}
	 *
	 * @var string Domain: icon Type: varchar
	 */
	public ?string $ss_serpaytype_icon = null;

	/**
	 * Order
	 *
	 *
	 *
	 * {domain{order}}
	 *
	 * @var int Domain: order Type: integer
	 */
	public ?int $ss_serpaytype_order = 0;

	/**
	 * Group #
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\Payment\Type\Groups}}
	 * {domain{type_id}}
	 *
	 * @var int Domain: type_id Type: smallint
	 */
	public ?int $ss_serpaytype_group_id = NULL;

	/**
	 * Regular Expression
	 *
	 *
	 *
	 * {domain{code}}
	 *
	 * @var string Domain: code Type: varchar
	 */
	public ?string $ss_serpaytype_regular_expression = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_serpaytype_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $ss_serpaytype_optimistic_lock = 'now()';
}