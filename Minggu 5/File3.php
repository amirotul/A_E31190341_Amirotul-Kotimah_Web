<?php
class Rectangle implements Shape {
	private $width;
	private $height;

	public function _contructor ($width, $height)
	{
		$this -> width = $width;
		$this -> heigth = $heigth;
	}
	public function calcArea ()
	{
		return $this -> width * $this -> heigth;
	}
	$circ = new Circle (3);
	$rect = new Rectangle (3,4);
}
echo $circ ->calcArea ();
echo $rect ->calArea ();
?>