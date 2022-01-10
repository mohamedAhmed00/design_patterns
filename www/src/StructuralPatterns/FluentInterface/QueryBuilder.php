<?php
namespace App\StructuralPatterns\FluentInterface;

class QueryBuilder implements IQueryBuilder
{
    private array $fields;
    private string $table;
    private array $condation;
    private int $limit;

    public function select(array $fields): IQueryBuilder
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): IQueryBuilder
    {
        $this->table = $table;
        return $this;
    }

    public function where(array $condation): IQueryBuilder
    {
        $this->condation = $condation;
        return $this;
    }

    public function limit(int $limit): IQueryBuilder
    {
        $this->limit = $limit;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf('SELECT %s FROM %s WHERE %s LIMIT %s', implode(',',$this->fields), $this->table, implode(' AND ',$this->condation), $this->limit);
    }

}