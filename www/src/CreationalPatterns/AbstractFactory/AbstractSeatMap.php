<?php
namespace App\CreationalPatterns\AbstractFactory;

abstract class AbstractSeatMap
{
    abstract public function getSeatMapObject() : Service;

}