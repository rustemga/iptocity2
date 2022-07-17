<?php
class Iptocity
{
    public string $ip;
    public function __construct($ip)
    {
        $ip = new Ip($ip);
        $this->ip = $ip->get_ip();
    }

    public function get_city()
    {
        if ($this->ip != '') :
            $db = new \IP2Location\Database('./data/IP2LOCATION-LITE-DB3.BIN', \IP2Location\Database::FILE_IO);

            $records = $db->lookup($this->ip, \IP2Location\Database::ALL);

            return $records['cityName'];

        else :
            echo "Oooops!";
        endif;
    }
}
