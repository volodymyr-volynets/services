<?php

namespace Numbers\Services\Services\Model;
class ServiceScriptsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\ServiceScripts::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servscript_tenant_id','ss_servscript_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servscript_tenant_id = NULL {
                        get => $this->ss_servscript_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_tenant_id', $value);
                            $this->ss_servscript_tenant_id = $value;
                        }
                    }

    /**
     * Service Script #
     *
     *
     *
     * {domain{service_script_id_sequence}}
     *
     * @var int|null Domain: service_script_id_sequence Type: serial
     */
    public int|null $ss_servscript_id = null {
                        get => $this->ss_servscript_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_id', $value);
                            $this->ss_servscript_id = $value;
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
    public string|null $ss_servscript_code = null {
                        get => $this->ss_servscript_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_code', $value);
                            $this->ss_servscript_code = $value;
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
    public string|null $ss_servscript_name = null {
                        get => $this->ss_servscript_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_name', $value);
                            $this->ss_servscript_name = $value;
                        }
                    }

    /**
     * Type #
     *
     *
     * {options_model{\Numbers\Services\Services\Model\ServiceScript\Types}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_servscript_type_id = 10 {
                        get => $this->ss_servscript_type_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_type_id', $value);
                            $this->ss_servscript_type_id = $value;
                        }
                    }

    /**
     * Versioned
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $ss_servscript_versioned = 0 {
                        get => $this->ss_servscript_versioned;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_versioned', $value);
                            $this->ss_servscript_versioned = $value;
                        }
                    }

    /**
     * Version Service Script #
     *
     *
     *
     * {domain{service_script_id}}
     *
     * @var int|null Domain: service_script_id Type: integer
     */
    public int|null $ss_servscript_version_service_script_id = NULL {
                        get => $this->ss_servscript_version_service_script_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_version_service_script_id', $value);
                            $this->ss_servscript_version_service_script_id = $value;
                        }
                    }

    /**
     * Version Code
     *
     *
     *
     * {domain{version_code}}
     *
     * @var string|null Domain: version_code Type: varchar
     */
    public string|null $ss_servscript_version_code = null {
                        get => $this->ss_servscript_version_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_version_code', $value);
                            $this->ss_servscript_version_code = $value;
                        }
                    }

    /**
     * Version Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $ss_servscript_version_name = null {
                        get => $this->ss_servscript_version_name;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_version_name', $value);
                            $this->ss_servscript_version_name = $value;
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
    public int|null $ss_servscript_inactive = 0 {
                        get => $this->ss_servscript_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_inactive', $value);
                            $this->ss_servscript_inactive = $value;
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
    public string|null $ss_servscript_optimistic_lock = 'now()' {
                        get => $this->ss_servscript_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servscript_optimistic_lock', $value);
                            $this->ss_servscript_optimistic_lock = $value;
                        }
                    }
}
