<?php

namespace Numbers\Services\Services\Model\Disposition;
class RolesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Disposition\Roles::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_disprol_tenant_id','ss_disprol_disposition_id','ss_disprol_role_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_disprol_tenant_id = NULL {
                        get => $this->ss_disprol_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disprol_tenant_id', $value);
                            $this->ss_disprol_tenant_id = $value;
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
    public string|null $ss_disprol_timestamp = 'now()' {
                        get => $this->ss_disprol_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disprol_timestamp', $value);
                            $this->ss_disprol_timestamp = $value;
                        }
                    }

    /**
     * Disposition #
     *
     *
     *
     * {domain{disposition_id}}
     *
     * @var int|null Domain: disposition_id Type: integer
     */
    public int|null $ss_disprol_disposition_id = NULL {
                        get => $this->ss_disprol_disposition_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disprol_disposition_id', $value);
                            $this->ss_disprol_disposition_id = $value;
                        }
                    }

    /**
     * Role #
     *
     *
     *
     * {domain{role_id}}
     *
     * @var int|null Domain: role_id Type: integer
     */
    public int|null $ss_disprol_role_id = NULL {
                        get => $this->ss_disprol_role_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disprol_role_id', $value);
                            $this->ss_disprol_role_id = $value;
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
    public int|null $ss_disprol_inactive = 0 {
                        get => $this->ss_disprol_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disprol_inactive', $value);
                            $this->ss_disprol_inactive = $value;
                        }
                    }
}
