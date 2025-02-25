<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class RegionsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Regions::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servquesregion_tenant_id','ss_servquesregion_service_script_id','ss_servquesregion_question_id','ss_servquesregion_region_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servquesregion_tenant_id = NULL {
                        get => $this->ss_servquesregion_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesregion_tenant_id', $value);
                            $this->ss_servquesregion_tenant_id = $value;
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
    public int|null $ss_servquesregion_service_script_id = NULL {
                        get => $this->ss_servquesregion_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesregion_service_script_id', $value);
                            $this->ss_servquesregion_service_script_id = $value;
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
    public int|null $ss_servquesregion_question_id = NULL {
                        get => $this->ss_servquesregion_question_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesregion_question_id', $value);
                            $this->ss_servquesregion_question_id = $value;
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
    public string|null $ss_servquesregion_timestamp = 'now()' {
                        get => $this->ss_servquesregion_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesregion_timestamp', $value);
                            $this->ss_servquesregion_timestamp = $value;
                        }
                    }

    /**
     * Region #
     *
     *
     *
     * {domain{region_id}}
     *
     * @var int|null Domain: region_id Type: integer
     */
    public int|null $ss_servquesregion_region_id = NULL {
                        get => $this->ss_servquesregion_region_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesregion_region_id', $value);
                            $this->ss_servquesregion_region_id = $value;
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
    public int|null $ss_servquesregion_inactive = 0 {
                        get => $this->ss_servquesregion_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesregion_inactive', $value);
                            $this->ss_servquesregion_inactive = $value;
                        }
                    }
}
