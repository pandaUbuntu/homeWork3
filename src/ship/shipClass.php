<?php
namespace ship;

abstract class Ship
{
    abstract function runShip();
    abstract function stopShip();
    abstract function crashShip();
}