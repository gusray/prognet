<?php
include_once 'Item.php';

class Buku extends Item {
    private $penulis;

    public function __construct($nama, $penulis) {
        parent::__construct($nama);  // Memanggil constructor dari class induk (Item)
        $this->penulis = $penulis;
    }

    public function getInfo() {
        return "Buku berjudul '$this->nama', ditulis oleh $this->penulis.";
    }
}
?>
