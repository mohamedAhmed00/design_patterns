<?php
namespace App\StructuralPatterns\Adapter\Packages;

class Predis implements IPredisInterface
{
    public function predisConnect()
    {
        var_dump("predis connect");
    }

    public function predisRead()
    {
        var_dump("predis read");
    }

    public function predisWrite()
    {
        var_dump("predis write");
    }
}