<?php
namespace App\StructuralPatterns\FluentInterface;

interface IQueryBuilder
{
    public function select(array $fields): self;
    public function from(string $table): self;
    public function where(array $condation): self;
    public function limit(int $limit): self;
}