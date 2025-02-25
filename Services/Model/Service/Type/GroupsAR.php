<?php

namespace Numbers\Services\Services\Model\Service\Type;
class GroupsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Type\Groups::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servtpgrp_tenant_id','ss_servtpgrp_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servtpgrp_tenant_id = NULL {
                        get => $this->ss_servtpgrp_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_tenant_id', $value);
                            $this->ss_servtpgrp_tenant_id = $value;
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
    public string|null $ss_servtpgrp_code = null {
                        get => $this->ss_servtpgrp_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_code', $value);
                            $this->ss_servtpgrp_code = $value;
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
    public string|null $ss_servtpgrp_name = null {
                        get => $this->ss_servtpgrp_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_name', $value);
                            $this->ss_servtpgrp_name = $value;
                        }
                    }

    /**
     * Icon
     *
     *
     *
     * {domain{icon}}
     *
     * @var string|null Domain: icon Type: varchar
     */
    public string|null $ss_servtpgrp_icon = null {
                        get => $this->ss_servtpgrp_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_icon', $value);
                            $this->ss_servtpgrp_icon = $value;
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
    public int|null $ss_servtpgrp_order = 0 {
                        get => $this->ss_servtpgrp_order;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_order', $value);
                            $this->ss_servtpgrp_order = $value;
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
    public int|null $ss_servtpgrp_inactive = 0 {
                        get => $this->ss_servtpgrp_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_inactive', $value);
                            $this->ss_servtpgrp_inactive = $value;
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
    public string|null $ss_servtpgrp_optimistic_lock = 'now()' {
                        get => $this->ss_servtpgrp_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servtpgrp_optimistic_lock', $value);
                            $this->ss_servtpgrp_optimistic_lock = $value;
                        }
                    }
}
