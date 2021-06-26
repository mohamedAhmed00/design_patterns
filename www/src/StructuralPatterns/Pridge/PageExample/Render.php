<?php
namespace App\StructuralPatterns\Pridge\PageExample;

interface Render
{
    public function renderTitle();
    public function renderBody();
    public function renderHeader();
    public function renderFooter();
}