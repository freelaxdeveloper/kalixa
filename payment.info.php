<?php
require_once('sys/init.php');

if (!isset($_GET['merchantTransactionID'])) {
  header('Location: ./orders.php');
  exit;
}
$merchantTransactionID = $_GET['merchantTransactionID'];

$kalixa = new Kalixa('xml/getPayments');
$kalixa->xml->merchantID = merchantID;
$kalixa->xml->shopID = shopID;
$kalixa->xml->merchantTransactionID = $merchantTransactionID;

$response = $kalixa->getResponse();

echo '<b>Request:</b> (' . $kalixa->getUrl() . ')';
dump($kalixa->xml);
echo '<b>Response:</b>';
dump($response);
