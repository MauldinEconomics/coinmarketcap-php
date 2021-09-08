<?php

namespace CoinMarketCap\Traits;

/**
 * Latest trait.
 */
trait Latest
{
    /**
     * Returns a paginated list of all active entities with latest market data.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function listingsLatest(array $params = [])
    {
        return $this->get('listings/latest', $params);
    }

    /**
     * Lists all active market pairs that CoinMarketCap tracks for a given entity or fiat currency.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function marketPairsLatest(array $params = [])
    {
        return $this->get('market-pairs/latest', $params);
    }
}
