<?php

namespace cryptoscan\request;


/**
 * Проверка доступности валюты
 *
 * Class CurrencyRateStatusRequest
 * @package cryptoscan\request
 */
class CurrencyRateStatusRequest implements HttpRequestInterface
{
    /**
     * @var string
     */
    private $currency;

    /**
     * @param string $currency
     */
    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @inheritDoc
     */
    public function getMethod()
    {
        return "GET";
    }

    /**
     * @inheritDoc
     */
    public function getUri()
    {
        return "currency-rate/{$this->currency}/status";
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
        return [];
    }
}
