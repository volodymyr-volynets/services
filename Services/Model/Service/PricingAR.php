<?php

namespace Numbers\Services\Services\Model\Service;
class PricingAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Services\Services\Model\Service\Pricing::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['ss_servprice_tenant_id','ss_servprice_service_id','ss_servprice_currency_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $ss_servprice_tenant_id = NULL {
                        get => $this->ss_servprice_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_tenant_id', $value);
                            $this->ss_servprice_tenant_id = $value;
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
    public string|null $ss_servprice_timestamp = 'now()' {
                        get => $this->ss_servprice_timestamp;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_timestamp', $value);
                            $this->ss_servprice_timestamp = $value;
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
    public int|null $ss_servprice_service_id = NULL {
                        get => $this->ss_servprice_service_id;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_service_id', $value);
                            $this->ss_servprice_service_id = $value;
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
    public string|null $ss_servprice_currency_code = null {
                        get => $this->ss_servprice_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_currency_code', $value);
                            $this->ss_servprice_currency_code = $value;
                        }
                    }

    /**
     * Cost Amount
     *
     *
     *
     * {domain{amount}}
     *
     * @var mixed Domain: amount Type: bcnumeric
     */
    public mixed $ss_servprice_cost_amount = '0.00' {
                        get => $this->ss_servprice_cost_amount;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_cost_amount', $value);
                            $this->ss_servprice_cost_amount = $value;
                        }
                    }

    /**
     * Minimum Cost
     *
     *
     *
     * {domain{amount}}
     *
     * @var mixed Domain: amount Type: bcnumeric
     */
    public mixed $ss_servprice_cost_minimum = '0.00' {
                        get => $this->ss_servprice_cost_minimum;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_cost_minimum', $value);
                            $this->ss_servprice_cost_minimum = $value;
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
    public int|null $ss_servprice_inactive = 0 {
                        get => $this->ss_servprice_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('ss_servprice_inactive', $value);
                            $this->ss_servprice_inactive = $value;
                        }
                    }
}
