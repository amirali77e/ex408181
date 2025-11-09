<?php

abstract class Shape{
       const UNIT = "cm²";
       abstract public function area();
}
class Rectangle extends Shape{
    public $width;
    public $height;

    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }
       public function  area(){
        return "masahat:" . $this->width * $this->height . self::UNIT;
       }
}

class cricle extends Shape{
    public $radius;

        public function __construct($radius){
       $this->radius = $radius;
    }

           public function  area(){
        return "masahat:" . ($this->radius ** 2)*M_PI . self::UNIT;
       }

}

$Rectangle = new Rectangle(12,43);
echo $Rectangle->area();
echo "<br>";


$cricle = new cricle(98);
echo $cricle->area();