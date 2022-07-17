<?php

class Ip
{
    public string $ip;

    public function __construct($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP)) :
            $this->ip = $ip;
        else: 
            $this->ip = '';
        endif;
    }

    public function get_ip()
    {
        //test
        return $this->ip;
    }
}
