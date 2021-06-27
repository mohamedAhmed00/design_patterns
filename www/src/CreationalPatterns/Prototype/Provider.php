<?php
namespace App\CreationalPatterns\Prototype;

class Provider implements Prototype
{
    /**
     * Provider constructor.
     * @param $name
     * @param $type
     * @param $version
     * @param $url
     */
    public function __construct(private $name, private $type, private $version, private $url)
    {
    }

    public function search(){
        echo "this is seach method";
    }

    public function getPrice(){
        echo "this is get price method";
    }

    public function seatMap(){
        echo "this is seat map method";
    }

    public function book(){
        echo "this is book method";
    }

    public function ticket(){
        echo "this is ticket method";
    }

    public function __clone()
    {
        $this->name = 'default name';
        $this->type = 'default type';
        $this->version = 'default version';
        $this->url = 'default url';
        return $this;
    }
}