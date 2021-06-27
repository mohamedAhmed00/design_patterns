<?php
namespace App\StructuralPatterns\Composite;

interface IPackage
{
    public function addProduct(IPrice $product);
    public function removeProduct(IPrice $product);
}