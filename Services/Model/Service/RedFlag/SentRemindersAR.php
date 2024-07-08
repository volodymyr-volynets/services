<?php

namespace Numbers\Services\Services\Model\Service\RedFlag;
class SentRemindersAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlag\SentReminders::class;

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
	public ?int $ss_servrdflgssentrems_tenant_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servrdflgssentrems_timestamp = 'now()';

	/**
	 * Red Flag #
	 *
	 *
	 *
	 * {domain{group_id}}
	 *
	 * @var int Domain: group_id Type: integer
	 */
	public ?int $ss_servrdflgssentrems_servredflag_id = NULL;

	/**
	 * Hash
	 *
	 *
	 *
	 * {domain{hash}}
	 *
	 * @var string Domain: hash Type: varchar
	 */
	public ?string $ss_servrdflgssentrems_hash = null;
}