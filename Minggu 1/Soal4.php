<?php
class Sepatu{
	public $merk;
	public $tipe;
	public $nomor;
	public $warna;
	public $harga;

	public function merk_sepatu(){
		return "Merk Sepatu : Adidas <br/>";
	}

	public function tipe_sepatu(){
		return "Tipe Sepatu : Sneaker <br/>";
	}
	public function nomor_sepatu(){
		return "Nomor Sepatu : 38 <br/>";
	}
	public function warna_sepatu(){
		return "Warna Sepatu : Biru <br/>";
	}
	public function harga_sepatu(){
		return "Harga Sepatu : Rp 350.000 <br/>";
	}

}
$sepatu = new Sepatu();

echo $sepatu->merk_sepatu();
echo $sepatu->tipe_sepatu();
echo $sepatu->nomor_sepatu();
echo $sepatu->warna_sepatu();
echo $sepatu->harga_sepatu();
?>