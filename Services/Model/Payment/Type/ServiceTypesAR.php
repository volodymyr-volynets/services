<?php

namespace Numbers\Services\Services\Model\Payment\Type;
class ServiceTypesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Payment\Type\ServiceTypes::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_serpaytservtype_tenant_id','ss_serpaytservtype_serpaytype_code','ss_serpaytservtype_servtype_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_serpaytservtype_tenant_id = NULL {
                        get => $this->ss_serpaytservtype_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytservtype_tenant_id', $value);
                            $this->ss_serpaytservtype_tenant_id = $value;
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
    public string|null $ss_serpaytservtype_timestamp = 'now()' {
                        get => $this->ss_serpaytservtype_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytservtype_timestamp', $value);
                            $this->ss_serpaytservtype_timestamp = $value;
                        }
                    }

    /**
     * Payment Type Code
     *
     *
     *
     * {domain{type_code}}
     *
     * @var string|null Domain: type_code Type: varchar
     */
    public string|null $ss_serpaytservtype_serpaytype_code = null {
                        get => $this->ss_serpaytservtype_serpaytype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytservtype_serpaytype_code', $value);
                            $this->ss_serpaytservtype_serpaytype_code = $value;
                        }
                    }

    /**
     * Service Type Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_serpaytservtype_servtype_code = null {
                        get => $this->ss_serpaytservtype_servtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytservtype_servtype_code', $value);
                            $this->ss_serpaytservtype_servtype_code = $value;
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
    public int|null $ss_serpaytservtype_inactive = 0 {
                        get => $this->ss_serpaytservtype_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytservtype_inactive', $value);
                            $this->ss_serpaytservtype_inactive = $value;
                        }
                    }
}
