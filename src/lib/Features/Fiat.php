<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Traits\Map;
use CoinMarketCap\Utils\ApiRequest;

/**
 * Fiat.
 */
class Fiat extends ApiRequest
{
    use Map;

    /**
     * Fiat constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'fiat'.'/';
    }
}
