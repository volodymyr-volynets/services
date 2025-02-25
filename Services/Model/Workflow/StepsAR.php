<?php

namespace Numbers\Services\Services\Model\Workflow;
class StepsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Workflow\Steps::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servworkstep_tenant_id','ss_servworkstep_servworkflow_code','ss_servworkstep_parent_servstatus_code','ss_servworkstep_child_servstatus_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servworkstep_tenant_id = NULL {
                        get => $this->ss_servworkstep_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkstep_tenant_id', $value);
                            $this->ss_servworkstep_tenant_id = $value;
                        }
                    }

    /**
     * Workflow Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servworkstep_servworkflow_code = null {
                        get => $this->ss_servworkstep_servworkflow_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkstep_servworkflow_code', $value);
                            $this->ss_servworkstep_servworkflow_code = $value;
                        }
                    }

    /**
     * Parent Status Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servworkstep_parent_servstatus_code = null {
                        get => $this->ss_servworkstep_parent_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkstep_parent_servstatus_code', $value);
                            $this->ss_servworkstep_parent_servstatus_code = $value;
                        }
                    }

    /**
     * Child Status Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servworkstep_child_servstatus_code = null {
                        get => $this->ss_servworkstep_child_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkstep_child_servstatus_code', $value);
                            $this->ss_servworkstep_child_servstatus_code = $value;
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
    public string|null $ss_servworkstep_name = null {
                        get => $this->ss_servworkstep_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkstep_name', $value);
                            $this->ss_servworkstep_name = $value;
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
    public int|null $ss_servworkstep_inactive = 0 {
                        get => $this->ss_servworkstep_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkstep_inactive', $value);
                            $this->ss_servworkstep_inactive = $value;
                        }
                    }
}
