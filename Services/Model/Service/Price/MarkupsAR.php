<?php

namespace Numbers\Services\Services\Model\Service\Price;
class MarkupsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Price\Markups::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servprcmarkup_tenant_id','ss_servprcmarkup_service_id','ss_servprcmarkup_currency_code','ss_servprcmarkup_detail_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servprcmarkup_tenant_id = NULL {
                        get => $this->ss_servprcmarkup_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_tenant_id', $value);
                            $this->ss_servprcmarkup_tenant_id = $value;
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
    public string|null $ss_servprcmarkup_timestamp = 'now()' {
                        get => $this->ss_servprcmarkup_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_timestamp', $value);
                            $this->ss_servprcmarkup_timestamp = $value;
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
    public int|null $ss_servprcmarkup_service_id = NULL {
                        get => $this->ss_servprcmarkup_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_service_id', $value);
                            $this->ss_servprcmarkup_service_id = $value;
                        }
                    }

    /**
     * Currency Code
     *
     *
     *
     * {domain{currency_code}}
     *
     * @var string|null Domain: currency_code Type: char
     */
    public string|null $ss_servprcmarkup_currency_code = null {
                        get => $this->ss_servprcmarkup_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_currency_code', $value);
                            $this->ss_servprcmarkup_currency_code = $value;
                        }
                    }

    /**
     * Detail #
     *
     *
     *
     * {domain{group_id}}
     *
     * @var int|null Domain: group_id Type: integer
     */
    public int|null $ss_servprcmarkup_detail_id = NULL {
                        get => $this->ss_servprcmarkup_detail_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_detail_id', $value);
                            $this->ss_servprcmarkup_detail_id = $value;
                        }
                    }

    /**
     * Under Amount
     *
     *
     *
     * {domain{amount}}
     *
     * @var mixed Domain: amount Type: bcnumeric
     */
    public mixed $ss_servprcmarkup_under_amount = '0.00' {
                        get => $this->ss_servprcmarkup_under_amount;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_under_amount', $value);
                            $this->ss_servprcmarkup_under_amount = $value;
                        }
                    }

    /**
     * Type
     *
     *
     * {options_model{\Numbers\Services\Services\Model\Service\Price\Types}}
     * {domain{type_id}}
     *
     * @var int|null Domain: type_id Type: smallint
     */
    public int|null $ss_servprcmarkup_type_id = NULL {
                        get => $this->ss_servprcmarkup_type_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_type_id', $value);
                            $this->ss_servprcmarkup_type_id = $value;
                        }
                    }

    /**
     * Markup
     *
     *
     *
     * {domain{amount}}
     *
     * @var mixed Domain: amount Type: bcnumeric
     */
    public mixed $ss_servprcmarkup_markup = '0.00' {
                        get => $this->ss_servprcmarkup_markup;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_markup', $value);
                            $this->ss_servprcmarkup_markup = $value;
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
    public int|null $ss_servprcmarkup_inactive = 0 {
                        get => $this->ss_servprcmarkup_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprcmarkup_inactive', $value);
                            $this->ss_servprcmarkup_inactive = $value;
                        }
                    }
}
