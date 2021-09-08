<?php

namespace CoinMarketCap\Utils;

use Unirest\Request;

/**
 * ApiRequest.
 *
 * @see    https://github.com/vittominacori/coinmarketcap-php
 *
 * @author  Vittorio Minacori (https://github.com/vittominacori)
 * @license https://github.com/vittominacori/coinmarketcap-php/blob/master/LICENSE (MIT License)
 */
abstract class ApiRequest
{
    public const APIPATH = 'https://pro-api.coinmarketcap.com/v1/';
    public const SANDBOX = 'https://sandbox-api.coinmarketcap.com/v1/';

    protected $apiPath;

    private static $headers = [
        'Accept'       => 'application/json',
        'Content-Type' => 'application/json',
    ];

    /**
     * ApiRequest constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        self::$headers['X-CMC_PRO_API_KEY'] = $apiKey;

        $this->apiPath = $sandbox ? self::SANDBOX : self::APIPATH;
    }

    /**
     * @return mixed
     *
     * @throws \Exception
     */
    protected function get(string $endpoint, array $parameters = [])
    {
        $apiCall  = $this->apiPath.$endpoint;
        $response = Request::get($apiCall, self::$headers, $parameters);

        if (200 == $response->code) {
            return $response->body;
        } else {
            throw new \Exception($response->body->status->error_message, $response->body->status->error_code);
        }
    }
}
