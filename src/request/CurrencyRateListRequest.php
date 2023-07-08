<?php

namespace cryptoscan\request;


/**
 * Запрос на получение списка валют
 *
 * Class CurrencyRateRequest
 * @package cryptoscan\request
 */
class CurrencyRateListRequest implements HttpRequestInterface
{
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
        return "currency-rate";
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
        return [];
    }
}
