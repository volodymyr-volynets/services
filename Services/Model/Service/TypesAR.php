<?php

namespace Numbers\Services\Services\Model\Service;
class TypesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Types::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servtype_tenant_id','ss_servtype_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servtype_tenant_id = NULL {
                        get => $this->ss_servtype_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_tenant_id', $value);
                            $this->ss_servtype_tenant_id = $value;
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
    public string|null $ss_servtype_code = null {
                        get => $this->ss_servtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_code', $value);
                            $this->ss_servtype_code = $value;
                        }
                    }

    /**
     * Service Type Group Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servtype_servtpgrp_code = null {
                        get => $this->ss_servtype_servtpgrp_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_servtpgrp_code', $value);
                            $this->ss_servtype_servtpgrp_code = $value;
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
    public string|null $ss_servtype_name = null {
                        get => $this->ss_servtype_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_name', $value);
                            $this->ss_servtype_name = $value;
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
    public string|null $ss_servtype_icon = null {
                        get => $this->ss_servtype_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_icon', $value);
                            $this->ss_servtype_icon = $value;
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
    public int|null $ss_servtype_order = 0 {
                        get => $this->ss_servtype_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_order', $value);
                            $this->ss_servtype_order = $value;
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
    public int|null $ss_servtype_inactive = 0 {
                        get => $this->ss_servtype_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_inactive', $value);
                            $this->ss_servtype_inactive = $value;
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
    public string|null $ss_servtype_optimistic_lock = 'now()' {
                        get => $this->ss_servtype_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtype_optimistic_lock', $value);
                            $this->ss_servtype_optimistic_lock = $value;
                        }
                    }
}
