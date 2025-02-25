<?php

namespace Numbers\Services\Services\Model\Service;
class RedFlagsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlags::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servredflag_tenant_id','ss_servredflag_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servredflag_tenant_id = NULL {
                        get => $this->ss_servredflag_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_tenant_id', $value);
                            $this->ss_servredflag_tenant_id = $value;
                        }
                    }

    /**
     * Red Flag #
     *
     *
     *
     * {domain{group_id_sequence}}
     *
     * @var int|null Domain: group_id_sequence Type: serial
     */
    public int|null $ss_servredflag_id = null {
                        get => $this->ss_servredflag_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_id', $value);
                            $this->ss_servredflag_id = $value;
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
    public string|null $ss_servredflag_code = null {
                        get => $this->ss_servredflag_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_code', $value);
                            $this->ss_servredflag_code = $value;
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
    public string|null $ss_servredflag_name = null {
                        get => $this->ss_servredflag_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_name', $value);
                            $this->ss_servredflag_name = $value;
                        }
                    }

    /**
     * Business Hours
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servredflag_business = 0 {
                        get => $this->ss_servredflag_business;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_business', $value);
                            $this->ss_servredflag_business = $value;
                        }
                    }

    /**
     * Interval
     *
     *
     *
     *
     *
     * @var string|null Type: interval
     */
    public string|null $ss_servredflag_interval = null {
                        get => $this->ss_servredflag_interval;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_interval', $value);
                            $this->ss_servredflag_interval = $value;
                        }
                    }

    /**
     * Date Type Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servredflag_servdatetype_code = null {
                        get => $this->ss_servredflag_servdatetype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_servdatetype_code', $value);
                            $this->ss_servredflag_servdatetype_code = $value;
                        }
                    }

    /**
     * Red Flag Status
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servredflag_red_flag_servstatus_code = null {
                        get => $this->ss_servredflag_red_flag_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_red_flag_servstatus_code', $value);
                            $this->ss_servredflag_red_flag_servstatus_code = $value;
                        }
                    }

    /**
     * Where
     *
     *
     *
     *
     *
     * @var string|null Type: text
     */
    public string|null $ss_servredflag_where = null {
                        get => $this->ss_servredflag_where;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_where', $value);
                            $this->ss_servredflag_where = $value;
                        }
                    }

    /**
     * All Services
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servredflag_all_services = 0 {
                        get => $this->ss_servredflag_all_services;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_all_services', $value);
                            $this->ss_servredflag_all_services = $value;
                        }
                    }

    /**
     * Type #
     *
     *
     * {options_model{\Numbers\Services\Services\Model\Service\RedFlag\Types}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_servredflag_type_id = 10 {
                        get => $this->ss_servredflag_type_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_type_id', $value);
                            $this->ss_servredflag_type_id = $value;
                        }
                    }

    /**
     * Before
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servredflag_before = 0 {
                        get => $this->ss_servredflag_before;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_before', $value);
                            $this->ss_servredflag_before = $value;
                        }
                    }

    /**
     * Notification Module #
     *
     *
     *
     * {domain{module_id}}
     *
     * @var int|null Domain: module_id Type: integer
     */
    public int|null $ss_servredflag_notification_module_id = NULL {
                        get => $this->ss_servredflag_notification_module_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_notification_module_id', $value);
                            $this->ss_servredflag_notification_module_id = $value;
                        }
                    }

    /**
     * Notification Feature Code
     *
     *
     *
     * {domain{feature_code}}
     *
     * @var string|null Domain: feature_code Type: varchar
     */
    public string|null $ss_servredflag_notification_feature_code = null {
                        get => $this->ss_servredflag_notification_feature_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_notification_feature_code', $value);
                            $this->ss_servredflag_notification_feature_code = $value;
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
    public int|null $ss_servredflag_inactive = 0 {
                        get => $this->ss_servredflag_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_inactive', $value);
                            $this->ss_servredflag_inactive = $value;
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
    public string|null $ss_servredflag_optimistic_lock = 'now()' {
                        get => $this->ss_servredflag_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servredflag_optimistic_lock', $value);
                            $this->ss_servredflag_optimistic_lock = $value;
                        }
                    }
}
