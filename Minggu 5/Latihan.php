<?php
interface hitungLuas {
	public function hitungLuas ();
}
class Persegi implements hitungLuas {

	public $sisi =10;
	public function _construct ($sisi) 
	{
		$this -> sisi = $sisi;
	}
	public function hitungLuas () 
	{
		return $this -> sisi * $this -> sisi;
	}
}

class Segitiga implements hitungLuas {

	private $alas=10;
	private $tinggi=5;

	public function _construct ($alas, $tinggi) 
	{
		$this -> alas = $alas;
		$this -> tinggi = $tinggi;
	}
	public function hitungLuas () 
	{
		return 0.5 * $this -> alas * $this -> tinggi;
	}
}

class Lingkaran implements hitungLuas {

	public $jari=10;

	public function _construct ($jari) 
	{
		$this -> jari = $jari;
	}
	public function hitungLuas () 
	{
		return 3.14 * $this-> jari * $this->jari;
	}
}
$persegi = new Persegi ();
$segitiga = new Segitiga (10,10);
$lingkaran = new Lingkaran (10);

echo "Luas Persegi : ";
echo "<br/>";
echo $persegi -> hitungLuas ();
echo "<br/>";

echo "Luas Segitiga : ";
echo "<br/>";
echo $segitiga -> hitungLuas ();
echo "<br/>";

echo "Luas Lingkaran : ";
echo "<br/>";
echo $lingkaran -> hitungLuas ();
echo "<br/>";

?>