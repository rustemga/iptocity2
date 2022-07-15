<?php
require 'vendor/autoload.php';

use GeoIp2\Database\Reader;

class Ip_to_city
{
    public $ip_address;

    function __construct($ip_address)
    {
        $this->ip_address = $ip_address;
    }


    function get_city_by_ip()
    {
        $reader = new Reader('/usr/local/share/GeoIP/GeoIP2-City.mmdb');

        if (filter_var($this->ip_address, FILTER_VALIDATE_IP)) {

            $record = $reader->city($this->ip_address);

            return $record->city->name;
        } else {
            return "incorrect ip address";
        }
    }
}
