<?php
require 'vendor/autoload.php';
$api_key = "298ad79d8a47f8e8ef8af9ecf51525d64787e88c58d28bbbcc2416669a291886";
$api_secret = "d95d7598fc68e353aba35fa342b7370b89bb77594abec00c607c2244ed10f41a";
$useTestnet = true;
$api = new Binance\API();

// Get all of your positions, including estimated BTC value
$balances = $api->balances();
print_r($balances);