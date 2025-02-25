<?php

namespace Numbers\Services\Services\Model\Service\RedFlag;
class StatusesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlag\Statuses::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servrdflgstatus_tenant_id','ss_servrdflgstatus_servredflag_id','ss_servrdflgstatus_servstatus_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servrdflgstatus_tenant_id = NULL {
                        get => $this->ss_servrdflgstatus_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgstatus_tenant_id', $value);
                            $this->ss_servrdflgstatus_tenant_id = $value;
                        }
                    }

    /**
     * Timestamp
     *
     *
     *
     * {domain{timestamp_now}}
     *
     * @var string|null Domain: timestamp_now Type: timestamp
     */
    public string|null $ss_servrdflgstatus_timestamp = 'now()' {
                        get => $this->ss_servrdflgstatus_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgstatus_timestamp', $value);
                            $this->ss_servrdflgstatus_timestamp = $value;
                        }
                    }

    /**
     * Red Flag #
     *
     *
     *
     * {domain{group_id}}
     *
     * @var int|null Domain: group_id Type: integer
     */
    public int|null $ss_servrdflgstatus_servredflag_id = NULL {
                        get => $this->ss_servrdflgstatus_servredflag_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgstatus_servredflag_id', $value);
                            $this->ss_servrdflgstatus_servredflag_id = $value;
                        }
                    }

    /**
     * Status
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servrdflgstatus_servstatus_code = null {
                        get => $this->ss_servrdflgstatus_servstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgstatus_servstatus_code', $value);
                            $this->ss_servrdflgstatus_servstatus_code = $value;
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
    public int|null $ss_servrdflgstatus_inactive = 0 {
                        get => $this->ss_servrdflgstatus_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgstatus_inactive', $value);
                            $this->ss_servrdflgstatus_inactive = $value;
                        }
                    }
}
