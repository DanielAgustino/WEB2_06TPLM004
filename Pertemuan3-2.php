<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <label for="angka1">Angka Pertama:</label>
        <input type="text" id="angka1" name="angka1"><br><br>
        
        <label for="angka2">Angka Kedua:</label>
        <input type="text" id="angka2" name="angka2"><br><br>
        
        <label for="operasi">Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (*)</option>
            <option value="bagi">Bagi (/)</option>
        </select><br><br>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
    // Fungsi untuk melakukan operasi penjumlahan
    function hitung($angka1, $angka2, $operasi) {
        switch ($operasi) {
            case 'tambah':
                return $angka1 + $angka2;
                break;
            case 'kurang':
                return $angka1 - $angka2;
                break;
            case 'kali':
                return $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    return $angka1 / $angka2;
                } else {
                    return "Tidak bisa dibagi oleh nol!";
                }
                break;
            default:
                return "Operasi tidak valid!";
                break;
        }
    }

    // Jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];

        // Melakukan operasi penjumlahan
        $hasil = hitung($angka1, $angka2, $operasi);

        // Menampilkan hasil
        echo "<h2>Hasil Operasi</h2>";
        echo "<p>Angka Pertama: $angka1</p>";
        echo "<p>Angka Kedua: $angka2</p>";
        echo "<p>Operasi: ";
        switch ($operasi) {
            case 'tambah':
                echo "Penambahan (+)";
                break;
            case 'kurang':
                echo "Pengurangan (-)";
                break;
            case 'kali':
                echo "Perkalian (*)";
                break;
            case 'bagi':
                echo "Pembagian (/)";
                break;
        }
        echo "</p>";
        echo "<p>Hasil: $hasil</p>";
    }
    ?>
</body>
</html>
