<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Utils\ApiRequest;

/**
 * Tools.
 *
 * @see    https://github.com/vittominacori/coinmarketcap-php
 *
 * @author  Vittorio Minacori (https://github.com/vittominacori)
 * @license https://github.com/vittominacori/coinmarketcap-php/blob/master/LICENSE (MIT License)
 */
class Tools extends ApiRequest
{
    /**
     * Tools constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'tools'.'/';
    }

    /**
     * Convert an amount of one cryptocurrency or fiat currency into one or more
     * different currencies utilizing the latest market rate for each currency.
     *
     * @param array $params ["amount", "id", "symbol", "time", "convert", "convert_id" ]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function priceConversion(array $params = [])
    {
        return $this->get('price-conversion', $params);
    }
}
