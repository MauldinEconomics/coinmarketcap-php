<?php

namespace CoinMarketCap;

use CoinMarketCap\Features\Blockchain;
use CoinMarketCap\Features\Cryptocurrency;
use CoinMarketCap\Features\Exchange;
use CoinMarketCap\Features\Fiat;
use CoinMarketCap\Features\GlobalMetrics;
use CoinMarketCap\Features\Key;
use CoinMarketCap\Features\Partners;
use CoinMarketCap\Features\Tools;

/**
 * Api.
 *
 * @see    https://github.com/vittominacori/coinmarketcap-php
 *
 * @author  Vittorio Minacori (https://github.com/vittominacori)
 * @license https://github.com/vittominacori/coinmarketcap-php/blob/master/LICENSE (MIT License)
 */
class Api
{
    /**
     * @var string
     */
    private static $apiKey = '';

    /**
     * @var bool
     */
    private static $sandbox = false;

    /**
     * @var Blockchain
     */
    private static $blockchain = null;

    /**
     * @var Cryptocurrency
     */
    private static $cryptocurrency = null;

    /**
     * @var Exchange
     */
    private static $exchange = null;

    /**
     * @var Fiat
     */
    private static $fiat = null;

    /**
     * @var GlobalMetrics
     */
    private static $globalMetrics = null;

    /**
     * @var Key
     */
    private static $key = null;

    /**
     * @var Partners
     */
    private static $partners = null;

    /**
     * @var Tools
     */
    private static $tools = null;

    /**
     * Api constructor.
     */
    public function __construct(string $apiKey, bool $sandbox = false)
    {
        self::$apiKey  = $apiKey;
        self::$sandbox = $sandbox;
    }

    public static function blockchain(): Blockchain
    {
        self::$blockchain = self::$blockchain ?: new Blockchain(self::$apiKey, self::$sandbox);

        return self::$blockchain;
    }

    public static function cryptocurrency(): Cryptocurrency
    {
        self::$cryptocurrency = self::$cryptocurrency ?: new Cryptocurrency(self::$apiKey, self::$sandbox);

        return self::$cryptocurrency;
    }

    public static function exchange(): Exchange
    {
        self::$exchange = self::$exchange ?: new Exchange(self::$apiKey, self::$sandbox);

        return self::$exchange;
    }

    public static function fiat(): Fiat
    {
        self::$fiat = self::$fiat ?: new Fiat(self::$apiKey, self::$sandbox);

        return self::$fiat;
    }

    public static function globalMetrics(): GlobalMetrics
    {
        self::$globalMetrics = self::$globalMetrics ?: new GlobalMetrics(self::$apiKey, self::$sandbox);

        return self::$globalMetrics;
    }

    public static function key(): Key
    {
        self::$key = self::$key ?: new Key(self::$apiKey, self::$sandbox);

        return self::$key;
    }

    public static function partners(): Partners
    {
        self::$partners = self::$partners ?: new Partners(self::$apiKey, self::$sandbox);

        return self::$partners;
    }

    public static function tools(): Tools
    {
        self::$tools = self::$tools ?: new Tools(self::$apiKey, self::$sandbox);

        return self::$tools;
    }
}
