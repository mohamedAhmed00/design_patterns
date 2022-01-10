<?php
namespace App\StructuralPatterns\Adapter;

use App\StructuralPatterns\Adapter\Packages\IPredisInterface;

class PredisAdapter implements CacheManager
{

    /**
     * PredisAdapter constructor.
     * @param IPredisInterface $predis
     */
    public function __construct(private IPredisInterface $predis)
    {
    }

    public function connect()
    {
        $this->predis->predisConnect();
    }

    public function read()
    {
        $this->predis->predisRead();
    }

    public function write()
    {
        $this->predis->predisWrite();
    }

}