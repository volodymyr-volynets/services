<?php

namespace Numbers\Services\Services\Model\Disposition;
class CodesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Disposition\Codes::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_disposition_tenant_id','ss_disposition_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_disposition_tenant_id = NULL {
                        get => $this->ss_disposition_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_tenant_id', $value);
                            $this->ss_disposition_tenant_id = $value;
                        }
                    }

    /**
     * Disposition #
     *
     *
     *
     * {domain{disposition_id_sequence}}
     *
     * @var int|null Domain: disposition_id_sequence Type: serial
     */
    public int|null $ss_disposition_id = null {
                        get => $this->ss_disposition_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_id', $value);
                            $this->ss_disposition_id = $value;
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
    public string|null $ss_disposition_code = null {
                        get => $this->ss_disposition_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_code', $value);
                            $this->ss_disposition_code = $value;
                        }
                    }

    /**
     * Type
     *
     *
     * {options_model{\Numbers\Services\Services\Model\Disposition\Types}}
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_disposition_type_code = null {
                        get => $this->ss_disposition_type_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_type_code', $value);
                            $this->ss_disposition_type_code = $value;
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
    public string|null $ss_disposition_name = null {
                        get => $this->ss_disposition_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_name', $value);
                            $this->ss_disposition_name = $value;
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
    public string|null $ss_disposition_icon = null {
                        get => $this->ss_disposition_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_icon', $value);
                            $this->ss_disposition_icon = $value;
                        }
                    }

    /**
     * Notification Emails
     *
     *
     *
     * {domain{description}}
     *
     * @var string|null Domain: description Type: varchar
     */
    public string|null $ss_disposition_notification_emails = null {
                        get => $this->ss_disposition_notification_emails;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_notification_emails', $value);
                            $this->ss_disposition_notification_emails = $value;
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
    public int|null $ss_disposition_inactive = 0 {
                        get => $this->ss_disposition_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_inactive', $value);
                            $this->ss_disposition_inactive = $value;
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
    public string|null $ss_disposition_optimistic_lock = 'now()' {
                        get => $this->ss_disposition_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disposition_optimistic_lock', $value);
                            $this->ss_disposition_optimistic_lock = $value;
                        }
                    }
}
