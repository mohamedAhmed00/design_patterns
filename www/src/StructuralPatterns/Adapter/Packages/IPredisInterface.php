<?php
namespace App\StructuralPatterns\Adapter\Packages;

interface IPredisInterface
{
    public function predisConnect();

    public function predisRead();

    public function predisWrite();
}