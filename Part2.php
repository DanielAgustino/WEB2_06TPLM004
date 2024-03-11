<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Rata-rata Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .output-container {
            width: 300px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .output-container p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h2>Hitung Rata-rata Nilai</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required><br>
        
        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="text" id="nilai_tugas" name="nilai_tugas" required><br>
        
        <label for="nilai_uts">Nilai UTS:</label>
        <input type="text" id="nilai_uts" name="nilai_uts" required><br>
        
        <label for="nilai_uas">Nilai UAS:</label>
        <input type="text" id="nilai_uas" name="nilai_uas" required><br>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
    // Jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        // Menghitung rata-rata nilai
        $rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

        // Menampilkan output
        echo "<div class='output-container'>";
        echo "<h3>Data Mahasiswa</h3>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Jurusan: $jurusan</p>";
        echo "<p>Nilai Tugas: $nilai_tugas</p>";
        echo "<p>Nilai UTS: $nilai_uts</p>";
        echo "<p>Nilai UAS: $nilai_uas</p>";
        echo "<p>Rata-rata Nilai: $rata_rata</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
