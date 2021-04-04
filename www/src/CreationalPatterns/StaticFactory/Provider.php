<?php
namespace App\CreationalPatterns\StaticFactory;

interface Provider {
    public function search();

    public function getPrice();

    public function seatMap();

    public function book();
}