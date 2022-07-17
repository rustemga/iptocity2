<?php

if(file_exists('vendor/autoload.php')) {
    include 'vendor/autoload.php';
}

// $ip = new Classname('127.0.0.1');

// echo $ip->methodname();
// use GeoIp2\Database\Reader;
// $reader = new Reader();

$db = new \IP2Location\Database('./data/IP2LOCATION-LITE-DB3.BIN', \IP2Location\Database::FILE_IO);

$records = $db->lookup('94.180.208.185', \IP2Location\Database::ALL);

echo $db->getDate();

echo 'City Name: ' . $records['cityName'] . "\n";

$iptocity = new Iptocity('94.180.208.185');
echo $iptocity;