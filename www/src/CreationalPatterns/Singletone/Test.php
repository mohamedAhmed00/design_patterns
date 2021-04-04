<?php
declare(strict_types=1);
namespace App\CreationalPatterns\Singletone;

class Test
{

    public function __construct(private string $name,private float $age)
    {
    }

    public function getInstance()
    {
        return $this;
    }
}