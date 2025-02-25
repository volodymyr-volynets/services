<?php

namespace Numbers\Services\Services\Model;
class WorkflowsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Workflows::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servworkflow_tenant_id','ss_servworkflow_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servworkflow_tenant_id = NULL {
                        get => $this->ss_servworkflow_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_tenant_id', $value);
                            $this->ss_servworkflow_tenant_id = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servworkflow_code = null {
                        get => $this->ss_servworkflow_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_code', $value);
                            $this->ss_servworkflow_code = $value;
                        }
                    }

    /**
     * Service Type Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servworkflow_servtype_code = null {
                        get => $this->ss_servworkflow_servtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_servtype_code', $value);
                            $this->ss_servworkflow_servtype_code = $value;
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
    public string|null $ss_servworkflow_name = null {
                        get => $this->ss_servworkflow_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_name', $value);
                            $this->ss_servworkflow_name = $value;
                        }
                    }

    /**
     * Icon
     *
     *
     *
     * {domain{icon}}
     *
     * @var string|null Domain: icon Type: varchar
     */
    public string|null $ss_servworkflow_icon = null {
                        get => $this->ss_servworkflow_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_icon', $value);
                            $this->ss_servworkflow_icon = $value;
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
    public int|null $ss_servworkflow_inactive = 0 {
                        get => $this->ss_servworkflow_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_inactive', $value);
                            $this->ss_servworkflow_inactive = $value;
                        }
                    }

    /**
     * Optimistic Lock
     *
     *
     *
     * {domain{optimistic_lock}}
     *
     * @var string|null Domain: optimistic_lock Type: timestamp
     */
    public string|null $ss_servworkflow_optimistic_lock = 'now()' {
                        get => $this->ss_servworkflow_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servworkflow_optimistic_lock', $value);
                            $this->ss_servworkflow_optimistic_lock = $value;
                        }
                    }
}
