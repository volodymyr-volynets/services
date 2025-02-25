<?php

namespace Numbers\Services\Services\Model\Service;
class IntegrationMappingsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\IntegrationMappings::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servintegmap_tenant_id','ss_servintegmap_service_id','ss_servintegmap_integtype_code','ss_servintegmap_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servintegmap_tenant_id = NULL {
                        get => $this->ss_servintegmap_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_tenant_id', $value);
                            $this->ss_servintegmap_tenant_id = $value;
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
    public string|null $ss_servintegmap_timestamp = 'now()' {
                        get => $this->ss_servintegmap_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_timestamp', $value);
                            $this->ss_servintegmap_timestamp = $value;
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
    public int|null $ss_servintegmap_service_id = NULL {
                        get => $this->ss_servintegmap_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_service_id', $value);
                            $this->ss_servintegmap_service_id = $value;
                        }
                    }

    /**
     * Integration Type
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servintegmap_integtype_code = null {
                        get => $this->ss_servintegmap_integtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_integtype_code', $value);
                            $this->ss_servintegmap_integtype_code = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{code}}
     *
     * @var string|null Domain: code Type: varchar
     */
    public string|null $ss_servintegmap_code = null {
                        get => $this->ss_servintegmap_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_code', $value);
                            $this->ss_servintegmap_code = $value;
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
    public string|null $ss_servintegmap_name = null {
                        get => $this->ss_servintegmap_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_name', $value);
                            $this->ss_servintegmap_name = $value;
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
    public int|null $ss_servintegmap_default = 0 {
                        get => $this->ss_servintegmap_default;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_default', $value);
                            $this->ss_servintegmap_default = $value;
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
    public int|null $ss_servintegmap_inactive = 0 {
                        get => $this->ss_servintegmap_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servintegmap_inactive', $value);
                            $this->ss_servintegmap_inactive = $value;
                        }
                    }
}
