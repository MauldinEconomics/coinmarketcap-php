<?php

namespace CoinMarketCap\Traits;

/**
 * CoinMarketCap ID Map trait.
 */
trait Map
{
    /**
     * Returns a mapping of unique CoinMarketCap ids.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function map(array $params = [])
    {
        return $this->get('map', $params);
    }
}
