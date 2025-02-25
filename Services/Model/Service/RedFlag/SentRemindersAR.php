<?php

namespace Numbers\Services\Services\Model\Service\RedFlag;
class SentRemindersAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\RedFlag\SentReminders::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servrdflgssentrems_tenant_id','ss_servrdflgssentrems_servredflag_id','ss_servrdflgssentrems_hash'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servrdflgssentrems_tenant_id = NULL {
                        get => $this->ss_servrdflgssentrems_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgssentrems_tenant_id', $value);
                            $this->ss_servrdflgssentrems_tenant_id = $value;
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
    public string|null $ss_servrdflgssentrems_timestamp = 'now()' {
                        get => $this->ss_servrdflgssentrems_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgssentrems_timestamp', $value);
                            $this->ss_servrdflgssentrems_timestamp = $value;
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
    public int|null $ss_servrdflgssentrems_servredflag_id = NULL {
                        get => $this->ss_servrdflgssentrems_servredflag_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgssentrems_servredflag_id', $value);
                            $this->ss_servrdflgssentrems_servredflag_id = $value;
                        }
                    }

    /**
     * Hash
     *
     *
     *
     * {domain{hash}}
     *
     * @var string|null Domain: hash Type: varchar
     */
    public string|null $ss_servrdflgssentrems_hash = null {
                        get => $this->ss_servrdflgssentrems_hash;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servrdflgssentrems_hash', $value);
                            $this->ss_servrdflgssentrems_hash = $value;
                        }
                    }
}
