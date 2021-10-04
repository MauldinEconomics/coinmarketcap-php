<?php

namespace CoinMarketCap\Features;

use CoinMarketCap\Traits\Info;
use CoinMarketCap\Traits\Latest;
use CoinMarketCap\Traits\Map;
use CoinMarketCap\Traits\Quotes;
use CoinMarketCap\Utils\ApiRequest;

/**
 * Exchange.
 */
class Exchange extends ApiRequest
{
    use Info;
    use Latest;
    use Map;
    use Quotes;

    /**
     * Exchange constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        parent::__construct($apiKey, $sandbox);
        $this->apiPath .= 'exchange'.'/';
    }
}
