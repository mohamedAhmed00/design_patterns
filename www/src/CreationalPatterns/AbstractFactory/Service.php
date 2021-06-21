<?php
namespace App\CreationalPatterns\AbstractFactory;

interface Service
{
    public function request();
    public function response();
}