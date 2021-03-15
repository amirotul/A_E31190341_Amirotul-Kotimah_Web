<?php
class Tablet {
	protected $merk = "Oppo";
	protected $camera = "12MP";
	protected $memory = "4GB";

	public function beli_handphone()
	{
		return "Beli Handphone baru";
	}
}
class Handphone extends Tablet {

	public function handphone_baru ()
	{
		return "Merk : ". $this-> merk."<br/> Camera : ". $this-> camera. "<br/> Memory : ". $this-> memory;
	}
}
$handphone_baru = new Handphone ();

echo $handphone_baru -> beli_handphone ();
echo "<br/>";
echo $handphone_baru -> handphone_baru ();

?>