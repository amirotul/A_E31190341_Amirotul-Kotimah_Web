<?php
class Laptop{

	//properties
	public $pemilik;
	public $merk;

	//methods = hidupkan_laptop
	public function hidupkan_laptop ()
	{
		return "Hidupkan laptop ". $this-> merk." milik ". $this-> pemilik;
	}
	//methods = matikan_laptop
	public function matikan_laptop () 
	{
		return "Matikan laptop ". $this-> merk." milik ". $this-> pemilik;
	} 
	//methods = restart_laptop
	public function restart_laptop()
	{
		return "Matikan laptop ". $this-> merk." milik ". $this-> pemilik. ". Hidupkan laptop ". $this-> merk." milik ". $this-> pemilik;
	}
}
$asus = new Laptop ();
$acer = new Laptop ();
$lenovo = new Laptop ();

$asus-> pemilik = 'A';
$asus-> merk = 'ASUS';
$acer-> pemilik = 'B';
$acer-> merk = 'Acer';
$lenovo-> pemilik = 'B';
$lenovo-> merk = 'Lenovo';

echo $asus-> hidupkan_laptop();
echo "<br/>";
echo $acer-> matikan_laptop();
echo "<br/>";
echo $lenovo-> restart_laptop();

?>