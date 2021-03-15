<?php
class Tablet {
	private $merk;
	private $camera;
	private $memory;

	public function beli_handphone()
	{
		return "Beli Handphone baru ";
	}
}
class Handphone extends Tablet {

	public function handphone_baru ()
	{
		return "Merk : ". $this-> merk."<br/> Camera : ". $this-> camera. "<br/> Memory : ". $this-> memory;
	}
}
$handphone_baru = new Handphone ();

$handphone_baru -> merk = "Oppo";
$handphone_baru -> camera = "12MP";
$handphone_baru -> memory = "4GB";

echo $handphone_baru -> beli_handphone ();
echo "<br/>";
echo $handphone_baru -> handphone_baru ();

?>