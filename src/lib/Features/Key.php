<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Traits\Info;
use CoinMarketCap\Utils\ApiRequest;

/**
 * Key.
 */
class Key extends ApiRequest
{
    use Info;

    /**
     * Key constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'key'.'/';
    }
}
