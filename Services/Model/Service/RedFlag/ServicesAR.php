<?php

namespace Numbers\Services\Services\Model\Service\RedFlag;
class ServicesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlag\Services::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servrdflgserv_tenant_id','ss_servrdflgserv_servredflag_id','ss_servrdflgserv_service_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servrdflgserv_tenant_id = NULL {
                        get => $this->ss_servrdflgserv_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgserv_tenant_id', $value);
                            $this->ss_servrdflgserv_tenant_id = $value;
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
    public string|null $ss_servrdflgserv_timestamp = 'now()' {
                        get => $this->ss_servrdflgserv_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgserv_timestamp', $value);
                            $this->ss_servrdflgserv_timestamp = $value;
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
    public int|null $ss_servrdflgserv_servredflag_id = NULL {
                        get => $this->ss_servrdflgserv_servredflag_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgserv_servredflag_id', $value);
                            $this->ss_servrdflgserv_servredflag_id = $value;
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
    public int|null $ss_servrdflgserv_service_id = NULL {
                        get => $this->ss_servrdflgserv_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgserv_service_id', $value);
                            $this->ss_servrdflgserv_service_id = $value;
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
    public int|null $ss_servrdflgserv_inactive = 0 {
                        get => $this->ss_servrdflgserv_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgserv_inactive', $value);
                            $this->ss_servrdflgserv_inactive = $value;
                        }
                    }
}
