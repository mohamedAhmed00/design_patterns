<?php
namespace App\StructuralPatterns\Adapter\Packages;

class MemeCache implements IMemeCacheInterface
{
    public function getDriver()
    {
        var_dump("get driver");
    }

    public function read()
    {
        var_dump("read");
    }

    public function write()
    {
        var_dump("write");
    }
}