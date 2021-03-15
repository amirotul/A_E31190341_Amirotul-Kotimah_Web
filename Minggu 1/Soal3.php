<?php
class Kendaraan{
	public $jenis_kendaraan ;
	public $jumlah_roda;
	public $merk;
	public $bahan_bakar;
	public $harga;
	public $tahun_pembuatan;
	public $harga_second;


	function hargaSecond()
	{
		if ($this->tahun_pembuatan  > 2010){ $hargaSecond = '20% dari harga asli';
		return $hargaSecond;
	}
	else if ($this->tahun_pembuatan  >= 2005 && $this->tahun_pembuatan <= '2010'){ $hargaSecond = '30% dari harga asli';
		return $hargaSecond;
	}
	else if ($this->tahun_pembuatan  < 2005) {$hargaSecond = '40% dari harga asli';
		return $hargaSecond;
}
}
}
$kendaraan1 = new Kendaraan();
$kendaraan1->jenis_kendaraan='Mobil';
$kendaraan1->jumlah_roda=4;
$kendaraan1->merk='Avanza';
$kendaraan1->bahan_bakar='Premium';
$kendaraan1->harga=100000000;
$kendaraan1->tahun_pembuatan=2001;

echo "Jenis kendaraan : ". $kendaraan1->jenis_kendaraan;
echo "<br/>";
echo "Jumlah roda : ". $kendaraan1->jumlah_roda;
echo "<br/>";
echo "Merk : ". $kendaraan1->merk;
echo "<br/>";
echo "Bahan bakar : ". $kendaraan1->bahan_bakar;
echo "<br/>";
echo "Harga : ". $kendaraan1->harga;
echo "<br/>";
echo "Tahun Pembuatan : ". $kendaraan1->tahun_pembuatan;
echo "<br/>";
echo "Diskon : ".$kendaraan1->hargaSecond();
echo "<br/>";

?>
