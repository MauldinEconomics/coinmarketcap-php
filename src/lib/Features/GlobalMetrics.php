<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Traits\Quotes;
use CoinMarketCap\Utils\ApiRequest;

/**
 * GlobalMetrics.
 *
 * @see    https://github.com/vittominacori/coinmarketcap-php
 *
 * @author  Vittorio Minacori (https://github.com/vittominacori)
 * @license https://github.com/vittominacori/coinmarketcap-php/blob/master/LICENSE (MIT License)
 */
class GlobalMetrics extends ApiRequest
{
    use Quotes;

    /**
     * GlobalMetrics constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'global-metrics'.'/';
    }
}
