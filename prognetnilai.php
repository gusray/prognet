<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai</title>
</head>
<body>
    <h2>Form Input Nilai Mata Kuliah Pemrograman Internet</h2>
    
    <form method="POST" action="">

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="nilai">Nilai (0 - 100):</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
        
        <input type="submit" name="submit" value="Kumpul">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        
        // Konversi nilai angka ke huruf
        if ($nilai >= 80) {
            $grade = 'A';
        } elseif ($nilai >= 71) {
            $grade = 'B+';
        } elseif ($nilai >= 65) {
            $grade = 'B';
        } elseif ($nilai >= 60) {
            $grade = 'C+';
        } elseif ($nilai >= 55) {
            $grade = 'C';
        } elseif ($nilai >= 50) {
            $grade = 'D+';
        } elseif ($nilai >= 40) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        
        // Menampilkan hasil
        echo "<h3>Hasil:</h3>";
        echo "NIM: $nim <br>";
        echo "Nama: $nama <br>";
        echo "Nilai Angka: $nilai <br>";
        echo "Nilai Huruf: $grade <br>";
    }
    ?>
</body>
</html>
