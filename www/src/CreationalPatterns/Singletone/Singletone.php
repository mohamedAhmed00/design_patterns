<?php
declare(strict_types=1);
namespace App\CreationalPatterns\Singletone;

class Singletone
{
    private static Test $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Test
    {
        if (empty(self::$instance)){
            self::$instance = (new Test('nader ahmed', 50))->getInstance();
        }
        return self::$instance;
    }
}