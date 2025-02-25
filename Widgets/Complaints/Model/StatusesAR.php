<?php

namespace Numbers\Services\Widgets\Complaints\Model;
class StatusesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Widgets\Complaints\Model\Statuses::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servcompstatus_tenant_id','ss_servcompstatus_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servcompstatus_tenant_id = NULL {
                        get => $this->ss_servcompstatus_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcompstatus_tenant_id', $value);
                            $this->ss_servcompstatus_tenant_id = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $ss_servcompstatus_code = null {
                        get => $this->ss_servcompstatus_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcompstatus_code', $value);
                            $this->ss_servcompstatus_code = $value;
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
    public string|null $ss_servcompstatus_name = null {
                        get => $this->ss_servcompstatus_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcompstatus_name', $value);
                            $this->ss_servcompstatus_name = $value;
                        }
                    }

    /**
     * Order
     *
     *
     *
     * {domain{order}}
     *
     * @var int|null Domain: order Type: integer
     */
    public int|null $ss_servcompstatus_order = 0 {
                        get => $this->ss_servcompstatus_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcompstatus_order', $value);
                            $this->ss_servcompstatus_order = $value;
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
    public int|null $ss_servcompstatus_inactive = 0 {
                        get => $this->ss_servcompstatus_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcompstatus_inactive', $value);
                            $this->ss_servcompstatus_inactive = $value;
                        }
                    }

    /**
     * Optimistic Lock
     *
     *
     *
     * {domain{optimistic_lock}}
     *
     * @var string|null Domain: optimistic_lock Type: timestamp
     */
    public string|null $ss_servcompstatus_optimistic_lock = 'now()' {
                        get => $this->ss_servcompstatus_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcompstatus_optimistic_lock', $value);
                            $this->ss_servcompstatus_optimistic_lock = $value;
                        }
                    }
}
