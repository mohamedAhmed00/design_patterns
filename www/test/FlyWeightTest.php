<?php
use \PHPUnit\Framework\TestCase;
use \App\StructuralPatterns\FlyWeight\CatFactory;

class FlyWeightTest extends TestCase
{
    private array $cats;

    public function setUp(): void
    {
        parent::setUp();
        $cat_factory = new CatFactory();
        $this->cats[] = $cat_factory->addCat('cat 1', 22, 'google.com', 'large', 'green');
        $this->cats[] = $cat_factory->addCat('cat 2', 23, 'google.com', 'large', 'green');
        $this->cats[] = $cat_factory->addCat('cat 3', 24, 'google.com', 'large', 'green');
        $this->cats[] = $cat_factory->addCat('cat 4', 24, 'google.com', 'large', 'green');
        $this->cats[] = $cat_factory->addCat('cat 5', 24, 'google.com', 'large', 'red');
    }

    public function testCanCatShareItsStateWithOtherCats()
    {
        $this->assertEquals($this->cats[0]->getCatData(),$this->cats[1]->getCatData());
        $this->assertNotEquals($this->cats[0]->getCatData(),$this->cats[4]->getCatData());
    }
}
