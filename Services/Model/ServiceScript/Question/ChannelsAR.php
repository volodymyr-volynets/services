<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class ChannelsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Channels::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servqueschan_tenant_id','ss_servqueschan_service_script_id','ss_servqueschan_question_id','ss_servqueschan_channel_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servqueschan_tenant_id = NULL {
                        get => $this->ss_servqueschan_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servqueschan_tenant_id', $value);
                            $this->ss_servqueschan_tenant_id = $value;
                        }
                    }

    /**
     * Service Script #
     *
     *
     *
     * {domain{service_script_id}}
     *
     * @var int|null Domain: service_script_id Type: integer
     */
    public int|null $ss_servqueschan_service_script_id = NULL {
                        get => $this->ss_servqueschan_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servqueschan_service_script_id', $value);
                            $this->ss_servqueschan_service_script_id = $value;
                        }
                    }

    /**
     * Question #
     *
     *
     *
     * {domain{question_id}}
     *
     * @var int|null Domain: question_id Type: integer
     */
    public int|null $ss_servqueschan_question_id = NULL {
                        get => $this->ss_servqueschan_question_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servqueschan_question_id', $value);
                            $this->ss_servqueschan_question_id = $value;
                        }
                    }

    /**
     * Timestamp
     *
     *
     *
     * {domain{timestamp_now}}
     *
     * @var string|null Domain: timestamp_now Type: timestamp
     */
    public string|null $ss_servqueschan_timestamp = 'now()' {
                        get => $this->ss_servqueschan_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servqueschan_timestamp', $value);
                            $this->ss_servqueschan_timestamp = $value;
                        }
                    }

    /**
     * Channel #
     *
     *
     *
     * {domain{channel_id}}
     *
     * @var int|null Domain: channel_id Type: integer
     */
    public int|null $ss_servqueschan_channel_id = NULL {
                        get => $this->ss_servqueschan_channel_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servqueschan_channel_id', $value);
                            $this->ss_servqueschan_channel_id = $value;
                        }
                    }

    /**
     * Inactive
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servqueschan_inactive = 0 {
                        get => $this->ss_servqueschan_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servqueschan_inactive', $value);
                            $this->ss_servqueschan_inactive = $value;
                        }
                    }
}
