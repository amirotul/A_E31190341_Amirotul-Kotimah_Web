<?php
//pembuatan class
 class Kalkulator {
 	//properties
 	public $angka1;
 	public $angka2;
 	public $hasil;

 	//method = tambah
 	public function tambah ()
 	{
 		$hasil= $this-> angka1 + $this-> angka2;
 		return $hasil;
 	}
 	//method = kurang
 	public function kurang ()
 	{
 		$hasil= $this-> angka1 - $this-> angka2;
 		return $hasil;
 	}
 	//method = bagi
 	public function bagi ()
 	{
 		$hasil= $this-> angka1 / $this-> angka2;
 		return $hasil;
 	}
 	//method = kali
 	public function kali ()
 	{
 		$hasil= $this-> angka1 * $this-> angka2;
 		return $hasil;
 	}
 }

 //membuat object
 $perhitungan = new Kalkulator ();
 
 //mengakses property dari dalam class
 $perhitungan-> angka1 = 10;
 $perhitungan-> angka2 = 2;
 
 //mengakses property dari luar class
 echo "Angka pertama = ".$perhitungan-> angka1 ;
 echo "<br/>";
 echo "Angka kedua = ".$perhitungan-> angka2 ;
 echo "<br/>";
 echo "<br/>";
 echo "Hasil Penjumlahan = ".$perhitungan-> tambah ();
 echo "<br/>";
 echo "Hasil Pengurangan = ".$perhitungan-> kurang ();
 echo "<br/>";
 echo "Hasil Pembagian = ".$perhitungan-> bagi ();
 echo "<br/>";
 echo "Hasil Perkalian = ".$perhitungan-> kali ();
 ?>