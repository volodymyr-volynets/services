<?php

namespace Numbers\Services\Services\Model\ServiceScript\Question;
class DescriptionAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Question\Description::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servquesdesc_tenant_id','ss_servquesdesc_service_script_id','ss_servquesdesc_question_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servquesdesc_tenant_id = NULL {
                        get => $this->ss_servquesdesc_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesdesc_tenant_id', $value);
                            $this->ss_servquesdesc_tenant_id = $value;
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
    public int|null $ss_servquesdesc_service_script_id = NULL {
                        get => $this->ss_servquesdesc_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesdesc_service_script_id', $value);
                            $this->ss_servquesdesc_service_script_id = $value;
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
    public int|null $ss_servquesdesc_question_id = NULL {
                        get => $this->ss_servquesdesc_question_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesdesc_question_id', $value);
                            $this->ss_servquesdesc_question_id = $value;
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
    public string|null $ss_servquesdesc_description = null {
                        get => $this->ss_servquesdesc_description;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquesdesc_description', $value);
                            $this->ss_servquesdesc_description = $value;
                        }
                    }
}
