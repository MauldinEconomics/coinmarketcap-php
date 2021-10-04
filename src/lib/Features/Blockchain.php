<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Utils\ApiRequest;

/**
 * Blockchain.
 */
class Blockchain extends ApiRequest
{
    /**
     * Blockchain constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'blockchain'.'/';
    }

    /**
     * Returns the latest blockchain statistics data for 1 or more blockchains.
     *
     * @param array $params ["id", "symbol", "slug"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function statisticsLatest(array $params = [])
    {
        return $this->get('statistics/latest', $params);
    }
}
