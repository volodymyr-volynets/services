<?php

namespace Numbers\Services\Services\Model\Service;
class AltNamesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\AltNames::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servaltname_tenant_id','ss_servaltname_service_id','ss_servaltname_name'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servaltname_tenant_id = NULL {
                        get => $this->ss_servaltname_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servaltname_tenant_id', $value);
                            $this->ss_servaltname_tenant_id = $value;
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
    public string|null $ss_servaltname_timestamp = 'now()' {
                        get => $this->ss_servaltname_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servaltname_timestamp', $value);
                            $this->ss_servaltname_timestamp = $value;
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
    public int|null $ss_servaltname_service_id = NULL {
                        get => $this->ss_servaltname_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servaltname_service_id', $value);
                            $this->ss_servaltname_service_id = $value;
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
    public string|null $ss_servaltname_name = null {
                        get => $this->ss_servaltname_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servaltname_name', $value);
                            $this->ss_servaltname_name = $value;
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
    public int|null $ss_servaltname_inactive = 0 {
                        get => $this->ss_servaltname_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servaltname_inactive', $value);
                            $this->ss_servaltname_inactive = $value;
                        }
                    }
}
