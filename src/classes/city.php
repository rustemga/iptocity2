<?php
class City
{
    public string $city;

    public function set_city($city)
    {
        $this->city = $city;
    }

    public function get_city()
    {
        return $this->city;
    }
}