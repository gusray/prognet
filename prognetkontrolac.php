<!DOCTYPE html>
<head>
    <title>Kontrol AC</title>
</head>
<body>
    <h2>Kontrol AC</h2>

    <form method="POST" action="">
        Suhu (°C):  <input type="number" name="suhu" required> <br> <br>
        Kelembapan (%): <input type="number" name="kelembapan" required> <br> <br>
        <input type="submit" value="Cek Status AC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $suhu = $_POST['suhu'];
        $kelembapan = $_POST['kelembapan'];
        if ($suhu < 24) {
            $statusAC = "AC Mati";
        } elseif ($suhu >= 24 && $suhu <= 27 && $kelembapan <= 40) {
            $statusAC = "AC Hidup Dengan Daya Rendah";
        } elseif ($suhu >= 24 && $suhu <= 27 && $kelembapan > 40 && $kelembapan <= 70) {
            $statusAC = "AC Hidup Dengan Daya Sedang";
        } elseif ($suhu >= 28 && $suhu <= 35 && $kelembapan <= 40) {
            $statusAC = "AC Hidup Dengan Daya Sedang";
        } elseif ($suhu >= 28 && $suhu <= 35 && $kelembapan > 40 && $kelembapan <= 70) {
            $statusAC = "AC Hidup Dengan Daya Berat";
        } else {
            $statusAC = "AC Hidup Dengan Daya Berat";
        }

        echo "<h3>Status AC: $statusAC</h3>";
    }
    ?>
</body>
</html>