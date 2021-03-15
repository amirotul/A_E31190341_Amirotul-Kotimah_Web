<?php

class MobilBMW {

	private $nontonTV;
	public function setnontonTv ($nontonTV)
	{
		$this -> nontonTV = $nontonTV;
	}
}
class MobilLengkap extends MobilBMW {
	public function TV ()
	{
		return "". $this -> nontonTV . "<br/>";
	}
}
$MobilLengkap1 = new MobilLengkap ();
$MobilLengkap2 = new MobilLengkap ();
$MobilLengkap3 = new MobilLengkap ();

$MobilLengkap1 -> nontonTV ='Nyalakan TV';
$MobilLengkap2 -> nontonTV ='TV Mencari Chanel';
$MobilLengkap3 -> nontonTV ='TV Menampilkan gambar';

echo $MobilLengkap1 -> TV ();
echo $MobilLengkap2 -> TV ();
echo $MobilLengkap3 -> TV ();
?>