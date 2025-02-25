<?php

namespace Numbers\Services\Services\Model\Service;
class SubServicesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\SubServices::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servsubserv_tenant_id','ss_servsubserv_service_id','ss_servsubserv_name'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servsubserv_tenant_id = NULL {
                        get => $this->ss_servsubserv_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servsubserv_tenant_id', $value);
                            $this->ss_servsubserv_tenant_id = $value;
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
    public string|null $ss_servsubserv_timestamp = 'now()' {
                        get => $this->ss_servsubserv_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servsubserv_timestamp', $value);
                            $this->ss_servsubserv_timestamp = $value;
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
    public int|null $ss_servsubserv_service_id = NULL {
                        get => $this->ss_servsubserv_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servsubserv_service_id', $value);
                            $this->ss_servsubserv_service_id = $value;
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
    public string|null $ss_servsubserv_name = null {
                        get => $this->ss_servsubserv_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servsubserv_name', $value);
                            $this->ss_servsubserv_name = $value;
                        }
                    }

    /**
     * Default
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servsubserv_default = 0 {
                        get => $this->ss_servsubserv_default;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servsubserv_default', $value);
                            $this->ss_servsubserv_default = $value;
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
    public int|null $ss_servsubserv_inactive = 0 {
                        get => $this->ss_servsubserv_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servsubserv_inactive', $value);
                            $this->ss_servsubserv_inactive = $value;
                        }
                    }
}
