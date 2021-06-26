<?php
namespace App\StructuralPatterns\Pridge\PageExample;

class XmlRender implements Render
{
    public function renderTitle()
    {
        return "render xml title";
    }
    public function renderBody()
    {
        return "render xml body";
    }
    public function renderHeader()
    {
        return "render xml header";
    }
    public function renderFooter()
    {
        return "render xml footer";
    }
}