<?php

namespace Numbers\Services\Services\Model\Service;
class CategoriesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Categories::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servcategory_tenant_id','ss_servcategory_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servcategory_tenant_id = NULL {
                        get => $this->ss_servcategory_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_tenant_id', $value);
                            $this->ss_servcategory_tenant_id = $value;
                        }
                    }

    /**
     * Category #
     *
     *
     *
     * {domain{category_id_sequence}}
     *
     * @var int|null Domain: category_id_sequence Type: serial
     */
    public int|null $ss_servcategory_id = null {
                        get => $this->ss_servcategory_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_id', $value);
                            $this->ss_servcategory_id = $value;
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
    public string|null $ss_servcategory_code = null {
                        get => $this->ss_servcategory_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_code', $value);
                            $this->ss_servcategory_code = $value;
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
    public string|null $ss_servcategory_name = null {
                        get => $this->ss_servcategory_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_name', $value);
                            $this->ss_servcategory_name = $value;
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
    public string|null $ss_servcategory_icon = null {
                        get => $this->ss_servcategory_icon;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_icon', $value);
                            $this->ss_servcategory_icon = $value;
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
    public int|null $ss_servcategory_inactive = 0 {
                        get => $this->ss_servcategory_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_inactive', $value);
                            $this->ss_servcategory_inactive = $value;
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
    public string|null $ss_servcategory_optimistic_lock = 'now()' {
                        get => $this->ss_servcategory_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcategory_optimistic_lock', $value);
                            $this->ss_servcategory_optimistic_lock = $value;
                        }
                    }
}
