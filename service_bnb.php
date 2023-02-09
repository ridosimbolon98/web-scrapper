<?php
/**
 * @author Rido Martupa Simbolon
 * BTC_USDT Scrapping Tokocrypto
 * 
 */

$url   = 'https://fapi.binance.com/fapi/v1/ticker/price?symbol=BTCUSDT';
require 'vendor/autoload.php';
$httpClient = new \GuzzleHttp\Client();
$response   = $httpClient->get($url);
echo $response;
?>