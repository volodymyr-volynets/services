<?php

namespace Numbers\Services\Services\Model\Service\Category;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Category\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servcatorg_tenant_id','ss_servcatorg_servcategory_id','ss_servcatorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servcatorg_tenant_id = NULL {
                        get => $this->ss_servcatorg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcatorg_tenant_id', $value);
                            $this->ss_servcatorg_tenant_id = $value;
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
    public string|null $ss_servcatorg_timestamp = 'now()' {
                        get => $this->ss_servcatorg_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcatorg_timestamp', $value);
                            $this->ss_servcatorg_timestamp = $value;
                        }
                    }

    /**
     * Category #
     *
     *
     *
     * {domain{category_id}}
     *
     * @var int|null Domain: category_id Type: integer
     */
    public int|null $ss_servcatorg_servcategory_id = NULL {
                        get => $this->ss_servcatorg_servcategory_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcatorg_servcategory_id', $value);
                            $this->ss_servcatorg_servcategory_id = $value;
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
    public int|null $ss_servcatorg_organization_id = NULL {
                        get => $this->ss_servcatorg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcatorg_organization_id', $value);
                            $this->ss_servcatorg_organization_id = $value;
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
    public int|null $ss_servcatorg_inactive = 0 {
                        get => $this->ss_servcatorg_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servcatorg_inactive', $value);
                            $this->ss_servcatorg_inactive = $value;
                        }
                    }
}
