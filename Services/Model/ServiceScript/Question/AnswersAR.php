<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class AnswersAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Answers::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servquesanswer_tenant_id','ss_servquesanswer_service_script_id','ss_servquesanswer_question_id','ss_servquesanswer_name'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servquesanswer_tenant_id = NULL {
                        get => $this->ss_servquesanswer_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_tenant_id', $value);
                            $this->ss_servquesanswer_tenant_id = $value;
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
    public int|null $ss_servquesanswer_service_script_id = NULL {
                        get => $this->ss_servquesanswer_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_service_script_id', $value);
                            $this->ss_servquesanswer_service_script_id = $value;
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
    public int|null $ss_servquesanswer_question_id = NULL {
                        get => $this->ss_servquesanswer_question_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_question_id', $value);
                            $this->ss_servquesanswer_question_id = $value;
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
    public string|null $ss_servquesanswer_timestamp = 'now()' {
                        get => $this->ss_servquesanswer_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_timestamp', $value);
                            $this->ss_servquesanswer_timestamp = $value;
                        }
                    }

    /**
     * Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $ss_servquesanswer_name = null {
                        get => $this->ss_servquesanswer_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_name', $value);
                            $this->ss_servquesanswer_name = $value;
                        }
                    }

    /**
     * Price
     *
     *
     *
     * {domain{amount}}
     *
     * @var mixed Domain: amount Type: bcnumeric
     */
    public mixed $ss_servquesanswer_price = '0.00' {
                        get => $this->ss_servquesanswer_price;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_price', $value);
                            $this->ss_servquesanswer_price = $value;
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
    public int|null $ss_servquesanswer_order = 0 {
                        get => $this->ss_servquesanswer_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_order', $value);
                            $this->ss_servquesanswer_order = $value;
                        }
                    }

    /**
     * Description
     *
     *
     *
     * {domain{description}}
     *
     * @var string|null Domain: description Type: varchar
     */
    public string|null $ss_servquesanswer_description = null {
                        get => $this->ss_servquesanswer_description;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_description', $value);
                            $this->ss_servquesanswer_description = $value;
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
    public int|null $ss_servquesanswer_inactive = 0 {
                        get => $this->ss_servquesanswer_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesanswer_inactive', $value);
                            $this->ss_servquesanswer_inactive = $value;
                        }
                    }
}
