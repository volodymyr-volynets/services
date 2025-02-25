<?php

namespace Numbers\Services\Services\Model\ServiceScript;
class QuestionsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Questions::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servquestion_tenant_id','ss_servquestion_service_script_id','ss_servquestion_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servquestion_tenant_id = NULL {
                        get => $this->ss_servquestion_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_tenant_id', $value);
                            $this->ss_servquestion_tenant_id = $value;
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
    public int|null $ss_servquestion_service_script_id = NULL {
                        get => $this->ss_servquestion_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_service_script_id', $value);
                            $this->ss_servquestion_service_script_id = $value;
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
    public int|null $ss_servquestion_id = NULL {
                        get => $this->ss_servquestion_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_id', $value);
                            $this->ss_servquestion_id = $value;
                        }
                    }

    /**
     * Name
     *
     *
     *
     * {domain{description}}
     *
     * @var string|null Domain: description Type: varchar
     */
    public string|null $ss_servquestion_name = null {
                        get => $this->ss_servquestion_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_name', $value);
                            $this->ss_servquestion_name = $value;
                        }
                    }

    /**
     * Order
     *
     *
     *
     * {domain{order}}
     *
     * @var int|null Domain: order Type: integer
     */
    public int|null $ss_servquestion_order = 0 {
                        get => $this->ss_servquestion_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_order', $value);
                            $this->ss_servquestion_order = $value;
                        }
                    }

    /**
     * Language Code
     *
     *
     *
     * {domain{language_code}}
     *
     * @var string|null Domain: language_code Type: char
     */
    public string|null $ss_servquestion_language_code = null {
                        get => $this->ss_servquestion_language_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_language_code', $value);
                            $this->ss_servquestion_language_code = $value;
                        }
                    }

    /**
     * Type
     *
     *
     * {options_model{\Numbers\Services\Services\Model\ServiceScript\Question\Types}}
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servquestion_type_code = null {
                        get => $this->ss_servquestion_type_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_type_code', $value);
                            $this->ss_servquestion_type_code = $value;
                        }
                    }

    /**
     * Model #
     *
     *
     *
     * {domain{group_id}}
     *
     * @var int|null Domain: group_id Type: integer
     */
    public int|null $ss_servquestion_model_id = NULL {
                        get => $this->ss_servquestion_model_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_model_id', $value);
                            $this->ss_servquestion_model_id = $value;
                        }
                    }

    /**
     * Required
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servquestion_required = 0 {
                        get => $this->ss_servquestion_required;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_required', $value);
                            $this->ss_servquestion_required = $value;
                        }
                    }

    /**
     * All Regions
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servquestion_all_regions = 0 {
                        get => $this->ss_servquestion_all_regions;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_all_regions', $value);
                            $this->ss_servquestion_all_regions = $value;
                        }
                    }

    /**
     * All Channels
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servquestion_all_channels = 0 {
                        get => $this->ss_servquestion_all_channels;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_all_channels', $value);
                            $this->ss_servquestion_all_channels = $value;
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
    public int|null $ss_servquestion_inactive = 0 {
                        get => $this->ss_servquestion_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_inactive', $value);
                            $this->ss_servquestion_inactive = $value;
                        }
                    }
}
