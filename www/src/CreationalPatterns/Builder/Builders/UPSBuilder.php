<?php
namespace App\CreationalPatterns\Builder\Builders;

use App\CreationalPatterns\Builder\Computer\UPS;

interface UPSBuilder
{
    public function buildUPS(): UPS;
}