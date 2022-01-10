<?php

use \PHPUnit\Framework\TestCase;
use \App\StructuralPatterns\FluentInterface\QueryBuilder;

class FluentInterfaceTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCanGenerateSql()
    {
        $query_builder = new QueryBuilder();
        $query_builder->select(['name','address'])->from('user')->where(['id > 1','age > 15'])->limit(10);
        $this->assertEquals('SELECT name,address FROM user WHERE id > 1 AND age > 15 LIMIT 10',$query_builder);
    }
}
