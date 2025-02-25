<?php

namespace Numbers\Services\Services\Model\Service;
class DateTypesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\DateTypes::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servdatetype_tenant_id','ss_servdatetype_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servdatetype_tenant_id = NULL {
                        get => $this->ss_servdatetype_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_tenant_id', $value);
                            $this->ss_servdatetype_tenant_id = $value;
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
    public string|null $ss_servdatetype_code = null {
                        get => $this->ss_servdatetype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_code', $value);
                            $this->ss_servdatetype_code = $value;
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
    public string|null $ss_servdatetype_name = null {
                        get => $this->ss_servdatetype_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_name', $value);
                            $this->ss_servdatetype_name = $value;
                        }
                    }

    /**
     * Filterable
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servdatetype_filterable = 0 {
                        get => $this->ss_servdatetype_filterable;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_filterable', $value);
                            $this->ss_servdatetype_filterable = $value;
                        }
                    }

    /**
     * Readonly
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servdatetype_readonly = 0 {
                        get => $this->ss_servdatetype_readonly;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_readonly', $value);
                            $this->ss_servdatetype_readonly = $value;
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
    public int|null $ss_servdatetype_inactive = 0 {
                        get => $this->ss_servdatetype_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_inactive', $value);
                            $this->ss_servdatetype_inactive = $value;
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
    public string|null $ss_servdatetype_optimistic_lock = 'now()' {
                        get => $this->ss_servdatetype_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servdatetype_optimistic_lock', $value);
                            $this->ss_servdatetype_optimistic_lock = $value;
                        }
                    }
}
