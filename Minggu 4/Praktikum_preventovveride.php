<?php
class Car {
	final public function hello ()
	{
		return "beep";
	}
}
class sportsCar extends Car {
	public function hello ()
	{
		return "Hello";
	}
}

$sportsCar1 = new sportsCar ();

echo $sportsCar1 -> hello ();
?>