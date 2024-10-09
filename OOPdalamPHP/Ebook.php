<?php
include_once 'Buku.php';

class Ebook extends Buku {
    private $ukuranFile;

    public function __construct($nama, $penulis, $ukuranFile) {
        parent::__construct($nama, $penulis);  // Memanggil constructor dari class induk (Buku)
        $this->ukuranFile = $ukuranFile;
    }

    public function getInfo() {
        return parent::getInfo() . " Ukuran file: $this->ukuranFile MB.";
    }
}
?>
