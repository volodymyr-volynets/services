<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class ChannelsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Channels::class;

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
	public ?int $ss_servqueschan_tenant_id = NULL;

	/**
	 * Service Script #
	 *
	 *
	 *
	 * {domain{service_script_id}}
	 *
	 * @var int Domain: service_script_id Type: integer
	 */
	public ?int $ss_servqueschan_service_script_id = NULL;

	/**
	 * Question #
	 *
	 *
	 *
	 * {domain{question_id}}
	 *
	 * @var int Domain: question_id Type: integer
	 */
	public ?int $ss_servqueschan_question_id = NULL;

	/**
	 * Timestamp
	 *
	 *
	 *
	 * {domain{timestamp_now}}
	 *
	 * @var string Domain: timestamp_now Type: timestamp
	 */
	public ?string $ss_servqueschan_timestamp = 'now()';

	/**
	 * Channel #
	 *
	 *
	 *
	 * {domain{channel_id}}
	 *
	 * @var int Domain: channel_id Type: integer
	 */
	public ?int $ss_servqueschan_channel_id = NULL;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $ss_servqueschan_inactive = 0;
}