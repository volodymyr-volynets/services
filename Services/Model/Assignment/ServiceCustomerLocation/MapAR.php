<?php

namespace Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation;
class MapAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Assignment\ServiceCustomerLocation\Map::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servcustlmap_tenant_id','ss_servcustlmap_user_id','ss_servcustlmap_organization_id','ss_servcustlmap_service_id','ss_servcustlmap_customer_id','ss_servcustlmap_location_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servcustlmap_tenant_id = NULL {
                        get => $this->ss_servcustlmap_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_tenant_id', $value);
                            $this->ss_servcustlmap_tenant_id = $value;
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
    public string|null $ss_servcustlmap_timestamp = 'now()' {
                        get => $this->ss_servcustlmap_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_timestamp', $value);
                            $this->ss_servcustlmap_timestamp = $value;
                        }
                    }

    /**
     * User #
     *
     *
     *
     * {domain{user_id}}
     *
     * @var int|null Domain: user_id Type: bigint
     */
    public int|null $ss_servcustlmap_user_id = NULL {
                        get => $this->ss_servcustlmap_user_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_user_id', $value);
                            $this->ss_servcustlmap_user_id = $value;
                        }
                    }

    /**
     * Primary Organization #
     *
     *
     *
     * {domain{organization_id}}
     *
     * @var int|null Domain: organization_id Type: integer
     */
    public int|null $ss_servcustlmap_organization_id = NULL {
                        get => $this->ss_servcustlmap_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_organization_id', $value);
                            $this->ss_servcustlmap_organization_id = $value;
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
    public int|null $ss_servcustlmap_service_id = NULL {
                        get => $this->ss_servcustlmap_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_service_id', $value);
                            $this->ss_servcustlmap_service_id = $value;
                        }
                    }

    /**
     * Customer #
     *
     *
     *
     * {domain{customer_id}}
     *
     * @var int|null Domain: customer_id Type: bigint
     */
    public int|null $ss_servcustlmap_customer_id = NULL {
                        get => $this->ss_servcustlmap_customer_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_customer_id', $value);
                            $this->ss_servcustlmap_customer_id = $value;
                        }
                    }

    /**
     * Location #
     *
     *
     *
     * {domain{location_id}}
     *
     * @var int|null Domain: location_id Type: integer
     */
    public int|null $ss_servcustlmap_location_id = NULL {
                        get => $this->ss_servcustlmap_location_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_location_id', $value);
                            $this->ss_servcustlmap_location_id = $value;
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
    public int|null $ss_servcustlmap_inactive = 0 {
                        get => $this->ss_servcustlmap_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcustlmap_inactive', $value);
                            $this->ss_servcustlmap_inactive = $value;
                        }
                    }
}
