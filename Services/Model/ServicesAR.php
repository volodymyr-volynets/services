<?php

namespace Numbers\Services\Services\Model;
class ServicesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Services::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_service_tenant_id','ss_service_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_service_tenant_id = NULL {
                        get => $this->ss_service_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_tenant_id', $value);
                            $this->ss_service_tenant_id = $value;
                        }
                    }

    /**
     * Service #
     *
     *
     *
     * {domain{service_id_sequence}}
     *
     * @var int|null Domain: service_id_sequence Type: serial
     */
    public int|null $ss_service_id = null {
                        get => $this->ss_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_id', $value);
                            $this->ss_service_id = $value;
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
    public string|null $ss_service_code = null {
                        get => $this->ss_service_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_code', $value);
                            $this->ss_service_code = $value;
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
    public string|null $ss_service_servtype_code = null {
                        get => $this->ss_service_servtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_servtype_code', $value);
                            $this->ss_service_servtype_code = $value;
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
    public string|null $ss_service_name = null {
                        get => $this->ss_service_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_name', $value);
                            $this->ss_service_name = $value;
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
    public string|null $ss_service_icon = null {
                        get => $this->ss_service_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_icon', $value);
                            $this->ss_service_icon = $value;
                        }
                    }

    /**
     * Assignment Type #
     *
     *
     * {options_model{\Numbers\Services\Services\Model\Service\Assignment\Types}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_service_assignment_type_id = NULL {
                        get => $this->ss_service_assignment_type_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_assignment_type_id', $value);
                            $this->ss_service_assignment_type_id = $value;
                        }
                    }

    /**
     * Category #
     *
     *
     *
     * {domain{category_id}}
     *
     * @var int|null Domain: category_id Type: integer
     */
    public int|null $ss_service_category_id = NULL {
                        get => $this->ss_service_category_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_category_id', $value);
                            $this->ss_service_category_id = $value;
                        }
                    }

    /**
     * Queue Type #
     *
     *
     *
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_service_queue_type_id = NULL {
                        get => $this->ss_service_queue_type_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_queue_type_id', $value);
                            $this->ss_service_queue_type_id = $value;
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
    public int|null $ss_service_service_script_id = NULL {
                        get => $this->ss_service_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_service_script_id', $value);
                            $this->ss_service_service_script_id = $value;
                        }
                    }

    /**
     * Billable
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_service_billable = 0 {
                        get => $this->ss_service_billable;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_billable', $value);
                            $this->ss_service_billable = $value;
                        }
                    }

    /**
     * Master Invoice
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_service_master_invoice = 0 {
                        get => $this->ss_service_master_invoice;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_master_invoice', $value);
                            $this->ss_service_master_invoice = $value;
                        }
                    }

    /**
     * Invoicing Details
     *
     *
     *
     * {domain{description}}
     *
     * @var string|null Domain: description Type: varchar
     */
    public string|null $ss_service_invoicing_details = null {
                        get => $this->ss_service_invoicing_details;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_invoicing_details', $value);
                            $this->ss_service_invoicing_details = $value;
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
    public int|null $ss_service_inactive = 0 {
                        get => $this->ss_service_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_inactive', $value);
                            $this->ss_service_inactive = $value;
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
    public string|null $ss_service_optimistic_lock = 'now()' {
                        get => $this->ss_service_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_optimistic_lock', $value);
                            $this->ss_service_optimistic_lock = $value;
                        }
                    }

    /**
     * Inserted Datetime
     *
     *
     *
     *
     *
     * @var string|null Type: timestamp
     */
    public string|null $ss_service_inserted_timestamp = null {
                        get => $this->ss_service_inserted_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_inserted_timestamp', $value);
                            $this->ss_service_inserted_timestamp = $value;
                        }
                    }

    /**
     * Inserted User #
     *
     *
     *
     * {domain{user_id}}
     *
     * @var int|null Domain: user_id Type: bigint
     */
    public int|null $ss_service_inserted_user_id = NULL {
                        get => $this->ss_service_inserted_user_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_inserted_user_id', $value);
                            $this->ss_service_inserted_user_id = $value;
                        }
                    }

    /**
     * Updated Datetime
     *
     *
     *
     *
     *
     * @var string|null Type: timestamp
     */
    public string|null $ss_service_updated_timestamp = null {
                        get => $this->ss_service_updated_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_updated_timestamp', $value);
                            $this->ss_service_updated_timestamp = $value;
                        }
                    }

    /**
     * Updated User #
     *
     *
     *
     * {domain{user_id}}
     *
     * @var int|null Domain: user_id Type: bigint
     */
    public int|null $ss_service_updated_user_id = NULL {
                        get => $this->ss_service_updated_user_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_service_updated_user_id', $value);
                            $this->ss_service_updated_user_id = $value;
                        }
                    }
}
