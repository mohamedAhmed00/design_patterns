<?php

namespace App\BehavioralPatterns\Template;

abstract class Provider
{
    public function getToken()
    {
        return "We make Token";
    }

    public function Search()
    {
        return "We search about flight";
    }

    public function getPrice()
    {
        return "We getPrice";
    }

    abstract public function seatMap();

    abstract public function ticket();

    public function booking()
    {
        return "booking";
    }
}