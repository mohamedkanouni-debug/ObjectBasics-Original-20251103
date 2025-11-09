<?php

abstract class  Shape {
 protected $color;
 public function __construct(string $color) {
    $this->color = $color;
 }

  public function getColor()
    {
        return $this->color;
    } 

      abstract public function getArea();
}

class Square extends Shape {
   
    public  float $length;

    public function __construct( $length, $color = 'black')
    {
        parent::__construct($color);
       $this->length = $length;
    }
   
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape  {
    protected $height;
    protected $base;

    public function __construct( $height, $base, $color = 'black')
    {
       parent::__construct($color);
       $this->height = $height;
       $this->base = $base;
    }
   
    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape {
    protected float $radius;
    public function __construct(float $radius , $color = "black") {
        parent::__construct($color);
        $this->$radius = $radius;
       

    }
       public function getArea(){
        
        return  pow($this->radius , 2) ;
    }
}

$square = new Square(5, "red");
echo $square->getColor() . PHP_EOL;
echo $square->getArea() . PHP_EOL;

$triangle = new Triangle(6, 3,"blue"); 
echo $triangle->getColor() . PHP_EOL;
echo $triangle->getArea() . PHP_EOL;

$circle = new Circle(2);
echo $circle->getArea() . PHP_EOL;