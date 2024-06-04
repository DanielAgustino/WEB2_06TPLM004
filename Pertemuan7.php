<!DOCTYPE html>
<html>
<head>
    <title>Program Pemrograman PHP</title>
</head>
<body>
    <h1>Materi Pemrograman PHP</h1>
    <form method="post" action="">
        <p>Pilih Materi yang ingin anda pelajari:</p>
        <label for="materi1">[1]Penggunaan IF</label>
        <input type="radio" id="materi1" name="materi" value="1">
        <label for="materi2">[2]Penggunaan SWITCH..CASE</label>
        <input type="radio" id="materi2" name="materi" value="2">
        <label for="materi3">[3]Penggunaan Looping</label>
        <input type="radio" id="materi3" name="materi" value="3">
        <label for="materi4">[4]Penggunaan Array</label>
        <input type="radio" id="materi4" name="materi" value="4">
        <br><br>
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    // Fungsi untuk menampilkan nilai akhir dan grade berdasarkan nilai
    function penggunaanIF() {
        // Contoh perhitungan nilai akhir
        $nilai = 80;
        $nilai_akhir = $nilai * 0.6 + 40;
        echo "Nilai Akhir: $nilai_akhir<br>";

        // Contoh penentuan grade
        if ($nilai_akhir >= 80) {
            echo "Grade: A";
        } elseif ($nilai_akhir >= 70) {
            echo "Grade: B";
        } elseif ($nilai_akhir >= 60) {
            echo "Grade: C";
        } elseif ($nilai_akhir >= 50) {
            echo "Grade: D";
        } else {
            echo "Grade: E";
        }
    }

    // Fungsi untuk membuat kalkulator sederhana
    function penggunaanSWITCH() {
        // Contoh kalkulator sederhana
        $angka1 = 10;
        $angka2 = 5;
        $operator = "+";

        switch ($operator) {
            case '+':
                echo "Hasil Penjumlahan: " . ($angka1 + $angka2);
                break;
            case '-':
                echo "Hasil Pengurangan: " . ($angka1 - $angka2);
                break;
            case '*':
                echo "Hasil Perkalian: " . ($angka1 * $angka2);
                break;
            case '/':
                echo "Hasil Pembagian: " . ($angka1 / $angka2);
                break;
            default:
                echo "Operator tidak valid";
                break;
        }
    }

    // Fungsi untuk menampilkan bilangan apa yang habis dibagi 3
    function penggunaanLooping() {
        // Contoh menampilkan bilangan habis dibagi 3
        echo "Bilangan habis dibagi 3: ";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0) {
                echo "$i ";
            }
        }
    }

    // Fungsi untuk menampilkan perkalian matriks
    function penggunaanArray() {
        // Contoh perkalian matriks
        $matriks1 = array(array(1, 2), array(3, 4));
        $matriks2 = array(array(5, 6), array(7, 8));
        $hasil = array();

        for ($i = 0; $i < count($matriks1); $i++) {
            for ($j = 0; $j < count($matriks2[0]); $j++) {
                $hasil[$i][$j] = 0;
                for ($k = 0; $k < count($matriks1[0]); $k++) {
                    $hasil[$i][$j] += $matriks1[$i][$k] * $matriks2[$k][$j];
                }
            }
        }

        // Menampilkan hasil perkalian matriks
        echo "Hasil Perkalian Matriks:<br>";
        for ($i = 0; $i < count($hasil); $i++) {
            for ($j = 0; $j < count($hasil[0]); $j++) {
                echo $hasil[$i][$j] . " ";
            }
            echo "<br>";
        }
    }

    // Periksa apakah form telah disubmit
    if(isset($_POST['submit'])) {
        $pilihan = $_POST['materi'];
        switch ($pilihan) {
            case '1':
                penggunaanIF();
                break;
            case '2':
                penggunaanSWITCH();
                break;
            case '3':
                penggunaanLooping();
                break;
            case '4':
                penggunaanArray();
                break;
            default:
                echo "Pilihan tidak valid";
                break;
        }
    }
    ?>
</body>
</html>
