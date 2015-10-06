<?php
abstract class Shape {
	protected $lenght = 4;
	protected $color;
	public function __construct($color = 'red'){
		return $this->color = $color;
	}
	function getColor(){
		return $this->color;
	}
	function getArea(){
		return pow($this->lenght, 2);
	}
	
}
class Square extends Shape{
	
}
class Triangle extends Shape{
	protected $base = 4;
	protected $height = 7;
	function getArea(){
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape{
	protected $radius = 5;
	public function getArea() {
		return M_PI * pow($this->radius, 2);
	}
}

echo (new Triangle())->getArea();

echo (new Square('green'))->getColor();

$circle = new Circle;
echo $circle->getArea();
