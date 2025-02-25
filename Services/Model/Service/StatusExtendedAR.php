<?php

namespace Numbers\Services\Services\Model\Service;
class StatusExtendedAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\StatusExtended::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servstatex_tenant_id','ss_servstatex_servstatus_code','ss_servstatex_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servstatex_tenant_id = NULL {
                        get => $this->ss_servstatex_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_tenant_id', $value);
                            $this->ss_servstatex_tenant_id = $value;
                        }
                    }

    /**
     * Status Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servstatex_servstatus_code = null {
                        get => $this->ss_servstatex_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_servstatus_code', $value);
                            $this->ss_servstatex_servstatus_code = $value;
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
    public string|null $ss_servstatex_code = null {
                        get => $this->ss_servstatex_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_code', $value);
                            $this->ss_servstatex_code = $value;
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
    public string|null $ss_servstatex_name = null {
                        get => $this->ss_servstatex_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_name', $value);
                            $this->ss_servstatex_name = $value;
                        }
                    }

    /**
     * Weight
     *
     *
     *
     * {domain{weight}}
     *
     * @var int|null Domain: weight Type: integer
     */
    public int|null $ss_servstatex_weight = NULL {
                        get => $this->ss_servstatex_weight;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_weight', $value);
                            $this->ss_servstatex_weight = $value;
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
    public int|null $ss_servstatex_inactive = 0 {
                        get => $this->ss_servstatex_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_inactive', $value);
                            $this->ss_servstatex_inactive = $value;
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
    public string|null $ss_servstatex_optimistic_lock = 'now()' {
                        get => $this->ss_servstatex_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatex_optimistic_lock', $value);
                            $this->ss_servstatex_optimistic_lock = $value;
                        }
                    }
}
