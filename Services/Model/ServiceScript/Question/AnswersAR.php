<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class AnswersAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Answers::class;

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
	public ?int $ss_servquesanswer_tenant_id = NULL;

	/**
	 * Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id}}
	 *
	 * @var int Domain: service_script_id Type: integer
	 */
	public ?int $ss_servquesanswer_service_script_id = NULL;

	/**
	 * Question #
	 *
	 *
	 *
	 * {domain{question_id}}
	 *
	 * @var int Domain: question_id Type: integer
	 */
	public ?int $ss_servquesanswer_question_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servquesanswer_timestamp = 'now()';

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $ss_servquesanswer_name = null;

	/**
	 * Price
	 *
	 *
	 *
	 * {domain{amount}}
	 *
	 * @var bcnumeric Domain: amount Type: bcnumeric
	 */
	public ?bcnumeric $ss_servquesanswer_price = '0.00';

	/**
	 * Order
	 *
	 *
	 *
	 * {domain{order}}
	 *
	 * @var int Domain: order Type: integer
	 */
	public ?int $ss_servquesanswer_order = 0;

	/**
	 * Description
	 *
	 *
	 *
	 * {domain{description}}
	 *
	 * @var string Domain: description Type: varchar
	 */
	public ?string $ss_servquesanswer_description = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servquesanswer_inactive = 0;
}