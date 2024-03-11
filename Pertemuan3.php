<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akademik</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim"><br><br>
        
        <label for="matakuliah">Matakuliah:</label>
        <input type="text" id="matakuliah" name="matakuliah"><br><br>
        
        <label for="kehadiran">Jumlah Kehadiran:</label>
        <input type="text" id="kehadiran" name="kehadiran"><br><br>
        
        <label for="tugas">Nilai Tugas:</label>
        <input type="text" id="tugas" name="tugas"><br><br>
        
        <label for="uts">Nilai UTS:</label>
        <input type="text" id="uts" name="uts"><br><br>
        
        <label for="uas">Nilai UAS:</label>
        <input type="text" id="uas" name="uas"><br><br>
        
        <input type="submit" value="Hitung Nilai">
    </form>

    <?php
    // Fungsi untuk menghitung nilai akhir
    function hitungNilaiAkhir($kehadiran, $nilaiTugas, $uts, $uas) {
        $bobotKehadiran = 0.10;
        $bobotTugas = 0.20;
        $bobotUTS = 0.30;
        $bobotUAS = 0.40;

        // Batasi maksimal kehadiran menjadi 18
        $kehadiran = min($kehadiran, 18);

        $nilaiAkhir = ($kehadiran * $bobotKehadiran) +
                    ($nilaiTugas * $bobotTugas) +
                    ($uts * $bobotUTS) +
                    ($uas * $bobotUAS);

        return $nilaiAkhir;
    }

    // Fungsi untuk menentukan grade
    function tentukanGrade($nilaiAkhir) {
        if ($nilaiAkhir >= 80) {
            return 'A';
        } elseif ($nilaiAkhir >= 70) {
            return 'B';
        } elseif ($nilaiAkhir >= 60) {
            return 'C';
        } elseif ($nilaiAkhir >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    // Fungsi untuk menentukan keterangan
    function tentukanKeterangan($nilaiAkhir) {
        if ($nilaiAkhir > 65) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }

    // Jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $matakuliah = $_POST['matakuliah'];
        $kehadiran = $_POST['kehadiran'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Hitung nilai akhir
        $nilaiAkhir = hitungNilaiAkhir($kehadiran, $tugas, $uts, $uas);

        // Tentukan grade
        $grade = tentukanGrade($nilaiAkhir);

        // Tentukan keterangan
        $keterangan = tentukanKeterangan($nilaiAkhir);

        // Tampilkan output
        echo "<h2>Nilai Akademik</h2>";
        echo "<p>NILAI AKADEMIK: $matakuliah </p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Jumlah Kehadiran: $kehadiran   Nilai Kehadiran: " . ($kehadiran * 100 / 18) . "%</p>";
        echo "<p>Nilai Tugas: $tugas</p>";
        echo "<p>Nilai UTS: $uts</p>";
        echo "<p>Nilai UAS: $uas</p>";
        echo "<p>Nilai Akhir: $nilaiAkhir</p>";
        echo "<p>Grade: $grade</p>";
        echo "<p>Keterangan: $keterangan</p>";
    }
    ?>
</body>
</html>
