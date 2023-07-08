<?php

namespace cryptoscan\response;

use cryptoscan\contract\CurrencyRateItemInterface;
use cryptoscan\entity\BaseObject;

/**
 * @inheritDoc
 *
 * Class CurrencyRateItemResponse
 * @package cryptoscan\response
 */
class CurrencyRateItemResponse extends BaseObject implements CurrencyRateItemInterface
{
    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $rate;

    /**
     * @var string
     */
    protected $status;

    /**
     * @inheritDoc
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @inheritDoc
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @inheritDoc
     */
    public function isEnabled()
    {
        return $this->status === self::STATUS_ENABLED;
    }

    /**
     * @param float|string $value
     */
    protected function setRate($value)
    {
        $this->rate = (float)$value;
    }
}
