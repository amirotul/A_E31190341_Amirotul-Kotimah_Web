<?php
class Car {
	public function hello ()
	{
		return "beep";
	}
}
class SportsCar extends Car {
	public function hello ()
	{
		return "Hello";
	}
}
$SportsCar1 = new SportsCar ();

echo $SportsCar1 -> hello ();
?>