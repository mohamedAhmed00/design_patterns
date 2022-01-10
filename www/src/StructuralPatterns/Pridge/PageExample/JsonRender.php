<?php
namespace App\StructuralPatterns\Pridge\PageExample;

class JsonRender implements Render
{
    public function renderTitle()
    {
        return "render json title";
    }
    public function renderBody()
    {
        return "render json body";
    }
    public function renderHeader()
    {
        return "render json header";
    }
    public function renderFooter()
    {
        return "render json footer";
    }
}