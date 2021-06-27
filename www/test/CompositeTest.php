<?php

use \PHPUnit\Framework\TestCase;
use \App\StructuralPatterns\Composite\SimpleProduct;
use \App\StructuralPatterns\Composite\ComlexProduct;
use \App\StructuralPatterns\Composite\Package;

class CompositeTest extends TestCase
{

    private array $products;

    public function setUp(): void
    {
        parent::setUp();
        $this->products['simple_product1'] = new SimpleProduct(20.0,'simple product 1');
        $this->products['simple_product2'] = new SimpleProduct(22.5,'simple product 2');
        $this->products['simple_product3'] = new SimpleProduct(21.6,'simple product 3');
        $this->products['complex_product1'] = new ComlexProduct(40.0,'complex product 1');
        $this->products['complex_product2'] = new ComlexProduct(42.5,'complex product 2');
        $this->products['complex_product3'] = new ComlexProduct(41.6,'complex product 3');
    }

    public function testCanPackageCompositeProducts()
    {
        $simplePackage = new Package(5.5,'simple package 1',[$this->products['simple_product1'],$this->products['simple_product2']]);

        $simplePackage->addProduct($this->products['simple_product3']);
        $simplePackage->addProduct($this->products['complex_product2']);
        $simplePackage->removeProduct($this->products['complex_product2']);
        $this->assertEquals(64.1,$simplePackage->calculatePrice());
    }
}
