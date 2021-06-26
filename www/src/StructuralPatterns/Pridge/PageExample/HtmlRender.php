<?php
namespace App\StructuralPatterns\Pridge\PageExample;

class HtmlRender implements Render
{
    public function renderTitle()
    {
        return "render html title <br>";
    }
    public function renderBody()
    {
        return "render html body <br>";
    }
    public function renderHeader()
    {
        return "render html header <br>";
    }
    public function renderFooter()
    {
        return "render html footer <br>";
    }
}