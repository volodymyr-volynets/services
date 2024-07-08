<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class DescriptionAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Description::class;

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
	public ?int $ss_servquesdesc_tenant_id = NULL;

	/**
	 * Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id}}
	 *
	 * @var int Domain: service_script_id Type: integer
	 */
	public ?int $ss_servquesdesc_service_script_id = NULL;

	/**
	 * Question #
	 *
	 *
	 *
	 * {domain{question_id}}
	 *
	 * @var int Domain: question_id Type: integer
	 */
	public ?int $ss_servquesdesc_question_id = NULL;

	/**
	 * Description
	 *
	 *
	 *
	 * {domain{description}}
	 *
	 * @var string Domain: description Type: varchar
	 */
	public ?string $ss_servquesdesc_description = null;
}