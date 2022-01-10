<?php
namespace App\CreationalPatterns\Builder;

use App\CreationalPatterns\Builder\Builders\Builder;
use App\CreationalPatterns\Builder\Computer\Types\Computer;

interface DirectorInterface
{
    public function changeBuilder(Builder $builder);

    public function makeComputer():Computer;
}