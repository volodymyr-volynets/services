<?php

namespace Numbers\Services\Services\Model\Service\Channel;
class MapAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Channel\Map::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servchanmap_tenant_id','ss_servchanmap_service_id','ss_servchanmap_channel_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servchanmap_tenant_id = NULL {
                        get => $this->ss_servchanmap_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servchanmap_tenant_id', $value);
                            $this->ss_servchanmap_tenant_id = $value;
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
    public string|null $ss_servchanmap_timestamp = 'now()' {
                        get => $this->ss_servchanmap_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servchanmap_timestamp', $value);
                            $this->ss_servchanmap_timestamp = $value;
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
    public int|null $ss_servchanmap_service_id = NULL {
                        get => $this->ss_servchanmap_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servchanmap_service_id', $value);
                            $this->ss_servchanmap_service_id = $value;
                        }
                    }

    /**
     * Channel #
     *
     *
     *
     * {domain{channel_id}}
     *
     * @var int|null Domain: channel_id Type: integer
     */
    public int|null $ss_servchanmap_channel_id = NULL {
                        get => $this->ss_servchanmap_channel_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servchanmap_channel_id', $value);
                            $this->ss_servchanmap_channel_id = $value;
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
    public int|null $ss_servchanmap_inactive = 0 {
                        get => $this->ss_servchanmap_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servchanmap_inactive', $value);
                            $this->ss_servchanmap_inactive = $value;
                        }
                    }
}
