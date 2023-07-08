<?php

namespace cryptoscan\response;

use cryptoscan\contract\CurrencyRateItemInterface;
use cryptoscan\contract\CurrencyRateListInterface;

/**
 * @inheritDoc
 *
 * Class CurrencyRateListResponse
 * @package cryptoscan\response
 */
class CurrencyRateListResponse extends BaseResponse implements CurrencyRateListInterface
{
    /**
     * @var CurrencyRateItemInterface[]
     */
    protected $items = [];

    /**
     * @inheritDoc
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array[] $items
     */
    protected function setData($items)
    {
        $this->items = array_map(
            static function (array $item) {
                return new CurrencyRateItemResponse($item);
            },
            $items
        );
    }
}
