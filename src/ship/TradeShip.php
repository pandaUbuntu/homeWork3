<?php

namespace ship;
use ship\steeringShip;

class TradeShip extends Ship implements steeringShip
{
    use shipReturnInfo;
    private $length_ship;
    private $width_ship;
    private $name_ship;

    public function __construct($length, $width, $name)
    {
        $this->length_ship = $length;
        $this->width_ship = $width;
        $this->name_ship = $name;
    }

    public function getInfo()
    {
        $this->getReturnName();
    }
    
    public function runShip()
    {
    }

    public function stopShip()
    {
    }

    public function crashShip()
    {
    }

    public function loadingCargoShip()
    {}

    public function freightShip()
    {}
}