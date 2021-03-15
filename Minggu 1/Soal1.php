<?php
//pendeklarasian class
class Buku{
	//pendeklarasian property
	public $judul_buku ='Laskar Pelangi' ;
	public $pengarang ='Andrea Hirata' ;
	public $penerbit ='Mizan Media Utama' ;
	public $tahun_terbit =2008 ;
	public $cetakan =17 ;
}	
	$buku = new Buku();

	echo "Judul buku : ".$buku -> judul_buku ;
	echo "<br/>";
	echo "Pengarang : ".$buku -> pengarang ;
	echo "<br/>";
	echo "Penerbit : ".$buku -> penerbit ;
	echo "<br/>";
	echo "Tahun terbit : ".$buku -> tahun_terbit ;
	echo "<br/>";
	echo "Cetakan : ".$buku -> cetakan ;

?>