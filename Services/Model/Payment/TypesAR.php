<?php

namespace Numbers\Services\Services\Model\Payment;
class TypesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Payment\Types::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_serpaytype_tenant_id','ss_serpaytype_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_serpaytype_tenant_id = NULL {
                        get => $this->ss_serpaytype_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_tenant_id', $value);
                            $this->ss_serpaytype_tenant_id = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{type_code}}
     *
     * @var string|null Domain: type_code Type: varchar
     */
    public string|null $ss_serpaytype_code = null {
                        get => $this->ss_serpaytype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_code', $value);
                            $this->ss_serpaytype_code = $value;
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
    public string|null $ss_serpaytype_name = null {
                        get => $this->ss_serpaytype_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_name', $value);
                            $this->ss_serpaytype_name = $value;
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
    public string|null $ss_serpaytype_icon = null {
                        get => $this->ss_serpaytype_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_icon', $value);
                            $this->ss_serpaytype_icon = $value;
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
    public int|null $ss_serpaytype_order = 0 {
                        get => $this->ss_serpaytype_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_order', $value);
                            $this->ss_serpaytype_order = $value;
                        }
                    }

    /**
     * Group #
     *
     *
     * {options_model{\Numbers\Services\Services\Model\Payment\Type\Groups}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_serpaytype_group_id = NULL {
                        get => $this->ss_serpaytype_group_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_group_id', $value);
                            $this->ss_serpaytype_group_id = $value;
                        }
                    }

    /**
     * Regular Expression
     *
     *
     *
     * {domain{code}}
     *
     * @var string|null Domain: code Type: varchar
     */
    public string|null $ss_serpaytype_regular_expression = null {
                        get => $this->ss_serpaytype_regular_expression;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_regular_expression', $value);
                            $this->ss_serpaytype_regular_expression = $value;
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
    public int|null $ss_serpaytype_inactive = 0 {
                        get => $this->ss_serpaytype_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_inactive', $value);
                            $this->ss_serpaytype_inactive = $value;
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
    public string|null $ss_serpaytype_optimistic_lock = 'now()' {
                        get => $this->ss_serpaytype_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytype_optimistic_lock', $value);
                            $this->ss_serpaytype_optimistic_lock = $value;
                        }
                    }
}
