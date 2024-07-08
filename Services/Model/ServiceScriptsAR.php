<?php

namespace Numbers\Services\Services\Model;
class ServiceScriptsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\ServiceScripts::class;

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
	public ?int $ss_servscript_tenant_id = NULL;

	/**
	 * Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id_sequence}}
	 *
	 * @var int Domain: service_script_id_sequence Type: serial
	 */
	public ?int $ss_servscript_id = null;

	/**
	 * Code
	 *
	 *
	 *
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_servscript_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_servscript_name = null;

	/**
	 * Type #
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\ServiceScript\Types}}
	 * {domain{type_id}}
	 *
	 * @var int Domain: type_id Type: smallint
	 */
	public ?int $ss_servscript_type_id = 10;

	/**
	 * Versioned
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servscript_versioned = 0;

	/**
	 * Version Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id}}
	 *
	 * @var int Domain: service_script_id Type: integer
	 */
	public ?int $ss_servscript_version_service_script_id = NULL;

	/**
	 * Version Code
	 *
	 *
	 *
	 * {domain{version_code}}
	 *
	 * @var string Domain: version_code Type: varchar
	 */
	public ?string $ss_servscript_version_code = null;

	/**
	 * Version Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_servscript_version_name = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servscript_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $ss_servscript_optimistic_lock = 'now()';
}