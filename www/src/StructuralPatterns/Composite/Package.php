<?php
namespace App\StructuralPatterns\Composite;

class Package implements IPrice, IPackage
{
    /**
     * Package constructor.
     * @param float $price
     * @param string $name
     * @param IPrice[] $products
     */
    public function __construct(private float $price, private string $name, private array $products)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    public function calculatePrice(): float
    {
        $total_price = 0.0;
        foreach ($this->products as $product){
            $total_price += $product->calculatePrice();
        }
        return $total_price;
    }

    public function addProduct(IPrice $product)
    {
        array_push($this->products,$product);
    }

    public function removeProduct(IPrice $product)
    {
        $this->products = array_filter($this->products,function ($product_item) use ($product){
            if($product != $product_item){
                return $product_item;
            }
        });
    }

}