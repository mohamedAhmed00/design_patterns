<?php
namespace App\CreationalPatterns\Builder\Computer\Types;

interface ICoolingSystem
{
    public function callDown(int $temp): bool;
}