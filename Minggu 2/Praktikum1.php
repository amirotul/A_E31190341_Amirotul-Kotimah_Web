<?php
class Car {

	//properties
	public $comp;
	public $color ='beige';
	public $hasSunRoof = true;

	//method = hello
	public function hello()
	{
		return "Beep I am a <i>". $this-> comp."<i/>, and I am <i>". $this-> color;

	}
}
//create object diclass
$bmw = new Car ();
$mercedes = new Car ();

//set value dari class properties
$bmw-> color = 'blue';
$bmw-> comp = 'BMW';
$mercedes-> comp = 'Mercedes Bens';

//call hello method untuk $bmw object
echo $bmw-> hello(); 
?>