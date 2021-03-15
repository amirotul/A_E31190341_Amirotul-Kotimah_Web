<?php
class miniCar implemets Car {
	private $model;

	public function setModel($name)
	{
		$this -> model = $name;
	}
	public function getModel ()
	{
		return $this -> model
	}
}
$multipurposevehicle = new miniCar ();
$sedan = new minicar ();
$hatchback = new minicar ();

?>