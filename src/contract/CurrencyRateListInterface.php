<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 04.06.2023
 * Time: 20:49
 */

namespace cryptoscan\contract;

/**
 * Поддерживаемые валюты
 *
 * Class CurrencyRateListInterface
 * @package cryptoscan\contract
 */
interface CurrencyRateListInterface
{
    /**
     * Успешно
     *
     * @return bool
     */
    public function isSuccess();

    /**
     * Инвойсы
     *
     * @return CurrencyRateItemInterface[]
     */
    public function getItems();
}