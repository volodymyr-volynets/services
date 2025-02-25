<?php

namespace Numbers\Services\Services\Model\Disposition;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Disposition\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_disporg_tenant_id','ss_disporg_disposition_id','ss_disporg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_disporg_tenant_id = NULL {
                        get => $this->ss_disporg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disporg_tenant_id', $value);
                            $this->ss_disporg_tenant_id = $value;
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
    public string|null $ss_disporg_timestamp = 'now()' {
                        get => $this->ss_disporg_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disporg_timestamp', $value);
                            $this->ss_disporg_timestamp = $value;
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
    public int|null $ss_disporg_disposition_id = NULL {
                        get => $this->ss_disporg_disposition_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disporg_disposition_id', $value);
                            $this->ss_disporg_disposition_id = $value;
                        }
                    }

    /**
     * Organization #
     *
     *
     *
     * {domain{organization_id}}
     *
     * @var int|null Domain: organization_id Type: integer
     */
    public int|null $ss_disporg_organization_id = NULL {
                        get => $this->ss_disporg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disporg_organization_id', $value);
                            $this->ss_disporg_organization_id = $value;
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
    public int|null $ss_disporg_inactive = 0 {
                        get => $this->ss_disporg_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_disporg_inactive', $value);
                            $this->ss_disporg_inactive = $value;
                        }
                    }
}
