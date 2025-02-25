<?php

namespace Numbers\Services\Services\Model\Service;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servorg_tenant_id','ss_servorg_service_id','ss_servorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servorg_tenant_id = NULL {
                        get => $this->ss_servorg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servorg_tenant_id', $value);
                            $this->ss_servorg_tenant_id = $value;
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
    public string|null $ss_servorg_timestamp = 'now()' {
                        get => $this->ss_servorg_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servorg_timestamp', $value);
                            $this->ss_servorg_timestamp = $value;
                        }
                    }

    /**
     * Service #
     *
     *
     *
     * {domain{service_id}}
     *
     * @var int|null Domain: service_id Type: integer
     */
    public int|null $ss_servorg_service_id = NULL {
                        get => $this->ss_servorg_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servorg_service_id', $value);
                            $this->ss_servorg_service_id = $value;
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
    public int|null $ss_servorg_organization_id = NULL {
                        get => $this->ss_servorg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servorg_organization_id', $value);
                            $this->ss_servorg_organization_id = $value;
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
    public int|null $ss_servorg_inactive = 0 {
                        get => $this->ss_servorg_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servorg_inactive', $value);
                            $this->ss_servorg_inactive = $value;
                        }
                    }
}
