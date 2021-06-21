<?php
namespace App\CreationalPatterns\Builder;

use App\CreationalPatterns\Builder\Builders\Builder;
use App\CreationalPatterns\Builder\Computer\Types\Computer;

class Director implements DirectorInterface
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeComputer():Computer
    {
        return $this->builder->getComputer();
    }
}