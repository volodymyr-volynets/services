<?php

namespace Numbers\Services\Services\Model\ServiceScript;
class QuestionsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Questions::class;

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
	public ?int $ss_servquestion_tenant_id = NULL;

	/**
	 * Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id}}
	 *
	 * @var int Domain: service_script_id Type: integer
	 */
	public ?int $ss_servquestion_service_script_id = NULL;

	/**
	 * Question #
	 *
	 *
	 *
	 * {domain{question_id}}
	 *
	 * @var int Domain: question_id Type: integer
	 */
	public ?int $ss_servquestion_id = NULL;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{description}}
	 *
	 * @var string Domain: description Type: varchar
	 */
	public ?string $ss_servquestion_name = null;

	/**
	 * Order
	 *
	 *
	 *
	 * {domain{order}}
	 *
	 * @var int Domain: order Type: integer
	 */
	public ?int $ss_servquestion_order = 0;

	/**
	 * Language Code
	 *
	 *
	 *
	 * {domain{language_code}}
	 *
	 * @var string Domain: language_code Type: char
	 */
	public ?string $ss_servquestion_language_code = null;

	/**
	 * Type
	 *
	 *
	 * {options_model{\Numbers\Services\Services\Model\ServiceScript\Question\Types}}
	 * {domain{group_code}}
	 *
	 * @var string Domain: group_code Type: varchar
	 */
	public ?string $ss_servquestion_type_code = null;

	/**
	 * Model #
	 *
	 *
	 *
	 * {domain{group_id}}
	 *
	 * @var int Domain: group_id Type: integer
	 */
	public ?int $ss_servquestion_model_id = NULL;

	/**
	 * Required
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servquestion_required = 0;

	/**
	 * All Regions
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servquestion_all_regions = 0;

	/**
	 * All Channels
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servquestion_all_channels = 0;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servquestion_inactive = 0;
}