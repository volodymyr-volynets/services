<?php

namespace Numbers\Services\Services\Model\Payment\Type;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Payment\Type\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_serpaytorg_tenant_id','ss_serpaytorg_serpaytype_code','ss_serpaytorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_serpaytorg_tenant_id = NULL {
                        get => $this->ss_serpaytorg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytorg_tenant_id', $value);
                            $this->ss_serpaytorg_tenant_id = $value;
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
    public string|null $ss_serpaytorg_timestamp = 'now()' {
                        get => $this->ss_serpaytorg_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytorg_timestamp', $value);
                            $this->ss_serpaytorg_timestamp = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{type_code}}
     *
     * @var string|null Domain: type_code Type: varchar
     */
    public string|null $ss_serpaytorg_serpaytype_code = null {
                        get => $this->ss_serpaytorg_serpaytype_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytorg_serpaytype_code', $value);
                            $this->ss_serpaytorg_serpaytype_code = $value;
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
    public int|null $ss_serpaytorg_organization_id = NULL {
                        get => $this->ss_serpaytorg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytorg_organization_id', $value);
                            $this->ss_serpaytorg_organization_id = $value;
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
    public int|null $ss_serpaytorg_inactive = 0 {
                        get => $this->ss_serpaytorg_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_serpaytorg_inactive', $value);
                            $this->ss_serpaytorg_inactive = $value;
                        }
                    }
}
