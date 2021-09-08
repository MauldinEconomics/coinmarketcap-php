<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Utils\ApiRequest;

/**
 * Partners.
 *
 * @see    https://github.com/vittominacori/coinmarketcap-php
 *
 * @author  Vittorio Minacori (https://github.com/vittominacori)
 * @license https://github.com/vittominacori/coinmarketcap-php/blob/master/LICENSE (MIT License)
 */
class Partners extends ApiRequest
{
    /**
     * Partners constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'partners'.'/';
    }

    /**
     * Returns a paginated list of FCAS scores for all cryptocurrencies currently supported by FCAS.
     *
     * @param array $params ["start", "limit", "aux" ]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function flipsideFCASListingLatest(array $params = [])
    {
        return $this->get('flipside-crypto/fcas/listings/latest', $params);
    }

    /**
     * Returns the latest FCAS score for 1 or more cryptocurrencies.
     *
     * @param array $params ["id", "slug", "symbol", "aux" ]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function flipsideFCASQuotesLatest(array $params = [])
    {
        return $this->get('flipside-crypto/fcas/quotes/latest', $params);
    }
}
