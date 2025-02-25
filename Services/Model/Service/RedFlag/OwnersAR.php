<?php

namespace Numbers\Services\Services\Model\Service\RedFlag;
class OwnersAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlag\Owners::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servrdflgowner_tenant_id','ss_servrdflgowner_servredflag_id','ss_servrdflgowner_ownertype_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servrdflgowner_tenant_id = NULL {
                        get => $this->ss_servrdflgowner_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgowner_tenant_id', $value);
                            $this->ss_servrdflgowner_tenant_id = $value;
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
    public string|null $ss_servrdflgowner_timestamp = 'now()' {
                        get => $this->ss_servrdflgowner_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgowner_timestamp', $value);
                            $this->ss_servrdflgowner_timestamp = $value;
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
    public int|null $ss_servrdflgowner_servredflag_id = NULL {
                        get => $this->ss_servrdflgowner_servredflag_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgowner_servredflag_id', $value);
                            $this->ss_servrdflgowner_servredflag_id = $value;
                        }
                    }

    /**
     * Owner Type #
     *
     *
     *
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_servrdflgowner_ownertype_id = NULL {
                        get => $this->ss_servrdflgowner_ownertype_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgowner_ownertype_id', $value);
                            $this->ss_servrdflgowner_ownertype_id = $value;
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
    public int|null $ss_servrdflgowner_inactive = 0 {
                        get => $this->ss_servrdflgowner_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgowner_inactive', $value);
                            $this->ss_servrdflgowner_inactive = $value;
                        }
                    }
}
