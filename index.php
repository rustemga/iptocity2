<?php

if(file_exists('vendor/autoload.php')) {
    include 'vendor/autoload.php';
}

// $ip = new Classname('127.0.0.1');

// echo $ip->methodname();
use GeoIp2\Database\Reader;
$reader = new Reader();