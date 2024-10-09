<?php
include_once 'Buku.php';

class CetakBuku extends Buku {
    private $jumlahHalaman;

    public function __construct($nama, $penulis, $jumlahHalaman) {
        parent::__construct($nama, $penulis);  // Memanggil constructor dari class induk (Buku)
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo() {
        return parent::getInfo() . " Buku ini memiliki $this->jumlahHalaman halaman.";
    }
}
?>
