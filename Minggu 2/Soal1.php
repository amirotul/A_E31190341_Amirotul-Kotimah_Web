<?php
class Laptop{

	//properties
	public $pemilik;
	public $merk;

	//methods = hidupkan_laptop
	public function hidupkan_laptop ()
	{
		return "Hidupkan laptop [". $this-> merk."] punya [". $this-> pemilik."]";
	}
	//methods = matikan_laptop
	public function matikan_laptop () 
	{
		return "Matikan laptop [". $this-> merk."] punya [". $this-> pemilik."]"; 
	}
	//methods = restart_laptop
	public function restart_laptop()
	{
		return "Matikan laptop [". $this-> merk."] punya [". $this-> pemilik."] . Hidupkan laptop [". $this-> merk."] punya [". $this-> pemilik."]";
	}
}
$laptop1 = new Laptop ();

$laptop1-> pemilik = 'Amirotul';
$laptop1-> merk = 'Asus';

echo $laptop1-> hidupkan_laptop();
echo "<br/>";
echo $laptop1-> matikan_laptop();
echo "<br/>";
echo $laptop1-> restart_laptop();
?>