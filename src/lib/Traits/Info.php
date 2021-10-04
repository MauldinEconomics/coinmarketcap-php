<?php

namespace CoinMarketCap\Traits;

/**
 * Metadata trait.
 */
trait Info
{
    /**
     * Returns all static metadata for one or more entities.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function info(array $params = [])
    {
        return $this->get('info', $params);
    }
}
