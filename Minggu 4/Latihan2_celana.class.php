<?php
include_once("Latihan2_produk.class.php");
class Celana {
    
    private $warna;
    private $ukuran;
    private $nama;
    
    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
}
?>