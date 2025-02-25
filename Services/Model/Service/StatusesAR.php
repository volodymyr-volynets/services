<?php

namespace Numbers\Services\Services\Model\Service;
class StatusesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Statuses::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servstatus_tenant_id','ss_servstatus_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servstatus_tenant_id = NULL {
                        get => $this->ss_servstatus_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_tenant_id', $value);
                            $this->ss_servstatus_tenant_id = $value;
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
    public string|null $ss_servstatus_code = null {
                        get => $this->ss_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_code', $value);
                            $this->ss_servstatus_code = $value;
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
    public string|null $ss_servstatus_servtype_code = null {
                        get => $this->ss_servstatus_servtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_servtype_code', $value);
                            $this->ss_servstatus_servtype_code = $value;
                        }
                    }

    /**
     * Status Group Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servstatus_servstsgrp_code = null {
                        get => $this->ss_servstatus_servstsgrp_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_servstsgrp_code', $value);
                            $this->ss_servstatus_servstsgrp_code = $value;
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
    public string|null $ss_servstatus_name = null {
                        get => $this->ss_servstatus_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_name', $value);
                            $this->ss_servstatus_name = $value;
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
    public string|null $ss_servstatus_icon = null {
                        get => $this->ss_servstatus_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_icon', $value);
                            $this->ss_servstatus_icon = $value;
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
    public int|null $ss_servstatus_order = 0 {
                        get => $this->ss_servstatus_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_order', $value);
                            $this->ss_servstatus_order = $value;
                        }
                    }

    /**
     * Red Flag
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servstatus_red_flag = 0 {
                        get => $this->ss_servstatus_red_flag;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_red_flag', $value);
                            $this->ss_servstatus_red_flag = $value;
                        }
                    }

    /**
     * Is Action
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servstatus_is_action = 0 {
                        get => $this->ss_servstatus_is_action;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_is_action', $value);
                            $this->ss_servstatus_is_action = $value;
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
    public string|null $ss_servstatus_parent_servstatus_code = null {
                        get => $this->ss_servstatus_parent_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_parent_servstatus_code', $value);
                            $this->ss_servstatus_parent_servstatus_code = $value;
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
    public int|null $ss_servstatus_weight = NULL {
                        get => $this->ss_servstatus_weight;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_weight', $value);
                            $this->ss_servstatus_weight = $value;
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
    public int|null $ss_servstatus_inactive = 0 {
                        get => $this->ss_servstatus_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_inactive', $value);
                            $this->ss_servstatus_inactive = $value;
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
    public string|null $ss_servstatus_optimistic_lock = 'now()' {
                        get => $this->ss_servstatus_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servstatus_optimistic_lock', $value);
                            $this->ss_servstatus_optimistic_lock = $value;
                        }
                    }
}
