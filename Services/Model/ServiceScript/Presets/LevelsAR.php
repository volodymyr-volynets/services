<?php

namespace Numbers\Services\Services\Model\ServiceScript\Presets;
class LevelsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScript\Presets\Levels::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servquestion_tenant_id','ss_servquestion_name'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servquestion_tenant_id = NULL {
                        get => $this->ss_servquestion_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_tenant_id', $value);
                            $this->ss_servquestion_tenant_id = $value;
                        }
                    }

    /**
     * Type
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $ss_servquestion_name = null {
                        get => $this->ss_servquestion_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servquestion_name', $value);
                            $this->ss_servquestion_name = $value;
                        }
                    }
}
