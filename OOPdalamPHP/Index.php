<?php
include 'Buku.php';
include 'Ebook.php';
include 'CetakBuku.php';

echo "<h2>Informasi Buku:</h2>";

// Membuat objek dari class Buku
$buku = new Buku("Pemrograman PHP", "Dio");
echo $buku->getInfo();  // Output: Buku berjudul 'Pemrograman PHP', ditulis oleh John Doe.

echo "<br><br>";

// Membuat objek dari class Ebook
$ebook = new Ebook("Pemrograman Java", "Putra", 5);
echo $ebook->getInfo();  // Output: Buku berjudul 'Pemrograman Java', ditulis oleh Jane Doe. Ukuran file: 5 MB.

echo "<br><br>";

// Membuat objek dari class CetakBuku
$cetakBuku = new CetakBuku("Pemrograman Python", "Very", 300);
echo $cetakBuku->getInfo();  // Output: Buku berjudul 'Pemrograman Python', ditulis oleh Alice. Buku ini memiliki 300 halaman.
?>
