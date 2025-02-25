<?php

namespace Numbers\Services\Services\Model\Service;
class OwnersAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Owners::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servowner_tenant_id','ss_servowner_service_id','ss_servowner_ownertype_id','ss_servowner_user_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servowner_tenant_id = NULL {
                        get => $this->ss_servowner_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servowner_tenant_id', $value);
                            $this->ss_servowner_tenant_id = $value;
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
    public string|null $ss_servowner_timestamp = 'now()' {
                        get => $this->ss_servowner_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servowner_timestamp', $value);
                            $this->ss_servowner_timestamp = $value;
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
    public int|null $ss_servowner_service_id = NULL {
                        get => $this->ss_servowner_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servowner_service_id', $value);
                            $this->ss_servowner_service_id = $value;
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
    public int|null $ss_servowner_ownertype_id = NULL {
                        get => $this->ss_servowner_ownertype_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servowner_ownertype_id', $value);
                            $this->ss_servowner_ownertype_id = $value;
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
    public int|null $ss_servowner_user_id = NULL {
                        get => $this->ss_servowner_user_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servowner_user_id', $value);
                            $this->ss_servowner_user_id = $value;
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
    public int|null $ss_servowner_inactive = 0 {
                        get => $this->ss_servowner_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servowner_inactive', $value);
                            $this->ss_servowner_inactive = $value;
                        }
                    }
}
