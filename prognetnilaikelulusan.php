<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Rata-rata Mahasiswa</title>
</head>
<body>
    <?php
    $mahasiswa = [
        ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
        ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
        ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
        ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
        ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
    ];

    $jumlahLulus = 0;
    $jumlahTidakLulus = 0;

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nama</th><th>Rata-rata</th><th>Status</th><th>Mata Pelajaran untuk Perbaikan</th></tr>";

    foreach ($mahasiswa as $mhs) {
        $nilaiRata = ($mhs["matematika"] + $mhs["bahasa_inggris"] + $mhs["ipa"]) / 3;
        $statusKelulusan = $nilaiRata >= 75 ? "Lulus" : "Tidak Lulus";

        if ($statusKelulusan == "Lulus") {
            $jumlahLulus++;
            $perbaikan = "-";
        } else {
            $jumlahTidakLulus++;
            $nilaiTerdekat = min($mhs["matematika"], $mhs["bahasa_inggris"], $mhs["ipa"]);
            $perbaikan = array_search($nilaiTerdekat, [
                "Matematika" => $mhs["matematika"],
                "Bahasa Inggris" => $mhs["bahasa_inggris"],
                "IPA" => $mhs["ipa"]
            ]);
        }

        echo "<tr><td>{$mhs["nama"]}</td><td>" . number_format($nilaiRata, 2) . "</td><td>{$statusKelulusan}</td><td>{$perbaikan}</td></tr>";
    }

    echo "</table>";

    echo "Jumlah Mahasiswa Lulus: {$jumlahLulus}<br>";
    echo "Jumlah Mahasiswa Tidak Lulus: {$jumlahTidakLulus}";
    ?>
</body>
</html>
