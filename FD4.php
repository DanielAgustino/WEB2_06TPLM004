<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
</head>
<body>
    <h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <form method="post" action="">
        <label>Nilai Awal:</label>
        <input type="number" name="nilai_awal" required><br><br>
        <label>Nilai Akhir:</label>
        <input type="number" name="nilai_akhir" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    <br>

    <?php
    if(isset($_POST['hitung'])) {
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];

        $jumlah_bilangan = 0;
        $jumlah_nilai_bilangan = 0;

        echo "Deret bilangan yang tampil: ";

        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if ($i % 2 != 0 && $i % 3 == 0) {
                echo $i . ", ";
                $jumlah_bilangan++;
                $jumlah_nilai_bilangan += $i;
            }
        }

        echo "<br>Jumlah Bilangan: " . $jumlah_bilangan;
        echo "<br>Jumlah Nilai Bilangan: ";
        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if ($i % 2 != 0 && $i % 3 == 0) {
                echo $i;
                if ($i != $nilai_akhir && $i != $nilai_akhir - 2) {
                    echo " + ";
                } elseif ($i == $nilai_akhir - 2) {
                    echo " + ";
                }
            }
        }
        echo " = " . $jumlah_nilai_bilangan;
    }
    ?>
</body>
</html>
