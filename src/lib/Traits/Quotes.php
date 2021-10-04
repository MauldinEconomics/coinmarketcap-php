<?php

namespace CoinMarketCap\Traits;

/**
 * Quotes trait.
 */
trait Quotes
{
    /**
     * Returns an interval of historic market quotes.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function quotesHistorical(array $params = [])
    {
        return $this->get('quotes/historical', $params);
    }

    /**
     * Returns the latest market quote for 1 or more entities.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function quotesLatest(array $params = [])
    {
        return $this->get('quotes/latest', $params);
    }
}
