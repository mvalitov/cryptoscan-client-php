<?php

namespace cryptoscan\response;

use cryptoscan\contract\CurrencyRateStatusInterface;

/**
 * @inheritDoc
 *
 * Class CurrencyRateStatusResponse
 * @package cryptoscan\response
 */
class CurrencyRateStatusResponse extends BaseResponse implements CurrencyRateStatusInterface
{
    /**
     * @var float|null
     */
    protected $rate;

    /**
     * @var string
     */
    protected $status;

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
     * @inheritDoc
     */
    public function isSupported()
    {
        return $this->status !== self::STATUS_NOT_SUPPORTED;
    }
}