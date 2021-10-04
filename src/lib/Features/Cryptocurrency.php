<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Traits\Info;
use CoinMarketCap\Traits\Latest;
use CoinMarketCap\Traits\Map;
use CoinMarketCap\Traits\Quotes;
use CoinMarketCap\Utils\ApiRequest;

/**
 * Cryptocurrency.
 *
 * @see    https://github.com/vittominacori/coinmarketcap-php
 *
 * @author  Vittorio Minacori (https://github.com/vittominacori)
 * @license https://github.com/vittominacori/coinmarketcap-php/blob/master/LICENSE (MIT License)
 */
class Cryptocurrency extends ApiRequest
{
    use Info;
    use Latest;
    use Map;
    use Quotes;

    /**
     * Cryptocurrency constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'cryptocurrency'.'/';
    }

    /**
     * Returns information about a single airdrop available on CoinMarketCap.
     * Includes the cryptocurrency metadata.
     *
     * @param array $params ["id"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function airdrop(array $params)
    {
        return $this->get('airdrop', $params);
    }

    /**
     * Returns a list of past, present, or future airdrops which have run on CoinMarketCap.
     *
     * @param array $params ["start", "limit", "status", "id", "slug", "symbol"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function airdrops(array $params = [])
    {
        return $this->get('airdrops', $params);
    }

    /**
     * Returns information about all coin categories available on CoinMarketCap.
     * Includes a paginated list of cryptocurrency quotes and metadata from each category.
     *
     * @param array $params ["start", "limit", "id", "slug", "symbol"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function categories(array $params = [])
    {
        return $this->get('categories', $params);
    }

    /**
     * Returns information about a single coin category available on CoinMarketCap.
     * Includes a paginated list of the cryptocurrency quotes and metadata for the category.
     *
     * @param array $params ["id", "start", "limit", "convert", "convert_id"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function category(array $params = [])
    {
        return $this->get('category', $params);
    }

    /**
     * Returns a ranked and sorted list of all cryptocurrencies for a historical UTC date.
     *
     * @param array $params ["date", "start", "limit", "convert", "convert_id", "sort", "sort_dir", "cryptocurrency_type", "aux"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function listingsHistorical(array $params)
    {
        return $this->get('listings/historical', $params);
    }

    /**
     * Lists all active market pairs that CoinMarketCap tracks for a given cryptocurrency or fiat currency.
     *
     * @param array $params ["id", "slug", "symbol", "time_period", "time_start", "time_end", "count", "interval", "convert", "convert_id", "skip_invalid"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function ohlcvHistorical(array $params)
    {
        return $this->get('ohlcv/historical', $params);
    }

    /**
     * Returns the latest OHLCV (Open, High, Low, Close, Volume) market values for one or more cryptocurrencies for the current UTC day.
     *
     * @param array $params ["id", "symbol", "convert", "convert_id", "skip_invalid"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function ohlcvLatest(array $params)
    {
        return $this->get('ohlcv/latest', $params);
    }

    /**
     * Returns the latest OHLCV (Open, High, Low, Close, Volume) market values for one or more cryptocurrencies for the current UTC day.
     *
     * @param array $params ["id", "slug", "symbol", "time_period", "convert", "convert_id", "skip_invalid"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function pricePerformanceStatsLatest(array $params)
    {
        return $this->get('price-performance-stats/latest', $params);
    }

    /**
     * Returns a paginated list of all trending cryptocurrencies, determined and sorted by the largest price gains or losses.
     *
     * @param array $params ["start", "limit", "time_period", "convert", "convert_id"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function trendingGainersLosers(array $params = [])
    {
        return $this->get('trending/gainers-losers', $params);
    }

    /**
     * Returns a paginated list of all trending cryptocurrency market data, determined and sorted by CoinMarketCap search volume.
     *
     * @param array $params ["start", "limit", "convert", "convert_id"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function trendingLatest(array $params = [])
    {
        return $this->get('trending/latest', $params);
    }

    /**
     * Returns a paginated list of all trending cryptocurrency market data, determined and sorted by traffic to coin detail pages.
     *
     * @param array $params ["start", "limit", "time_period", "convert", "convert_id"]
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function trendingMostVisited(array $params = [])
    {
        return $this->get('trending/most-visited', $params);
    }
}
