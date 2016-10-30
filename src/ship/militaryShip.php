<?php
namespace ship;

use ship\Ship;
use ship\steeringShip;
use ship\fireControlSystemShip;

class militaryShip extends Ship implements steeringShip, fireControlSystemShip
{
    private $length_ship;
    private $width_ship;
    private $name_ship;
    
    public function __construct($length, $width, $name)
    {
        $this->length_ship = $length;
        $this->width_ship = $width;
        $this->name_ship = $name;
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
    
    public function fireToEnemy()
    {
    }
    
    public function findSubmarine()
    {}
}