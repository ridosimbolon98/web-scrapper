<?php
/**
 * @author Rido Martupa Simbolon
 * BMKG curl
 * 
 */

$url   = 'https://www.bmkg.go.id/cuaca/prakiraan-cuaca.bmkg?kab=Semarang&Prov=Jawa_Tengah&AreaID=501262&lang=ID';
require 'vendor/autoload.php';
$httpClient = new \GuzzleHttp\Client();
$response   = $httpClient->get($url);
$htmlString = (string) $response->getBody();
//add this line to suppress any warnings
libxml_use_internal_errors(true);
$doc        = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath      = new DOMXPath($doc);

$data = $xpath->evaluate('//div[@id="TabPaneCuaca1"]');

echo json_encode($data);

?>
