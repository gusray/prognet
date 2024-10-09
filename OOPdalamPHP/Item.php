<?php
abstract class Item {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak
    abstract public function getInfo();
}
?>
