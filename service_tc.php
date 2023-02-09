<?php
/**
 * @author Rido Martupa Simbolon
 * BTC_USDT Scrapping Tokocrypto
 * 
 */

$url   = 'https://www.tokocrypto.com/trade/SOL_BIDR';
require 'vendor/autoload.php';
$httpClient = new \GuzzleHttp\Client();
$response   = $httpClient->get($url);
$htmlString = (string) $response->getBody();
//add this line to suppress any warnings
libxml_use_internal_errors(true);
$doc        = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath      = new DOMXPath($doc);

$currPrices = $xpath->evaluate('//div[@class="price"]//div[@class="val"]//span');
$change24   = $xpath->evaluate('//div[@class="change fall"]//div[@class="val"]//span');
$high24     = $xpath->evaluate('//div[@class="high"]//div');
$low24      = $xpath->evaluate('//div[@class="low"]//div');
$vol24      = $xpath->evaluate('//div[@class="volume"]//div');

$results    = array(
    'currPrice' => $currPrices[0]->textContent,
    'change24'  => $change24[1]->textContent,
    'high24'    => $high24[1]->textContent,
    'low24'     => $low24[1]->textContent,
    'vol24'     => $vol24[1]->textContent,
);

echo json_encode($results);

?>