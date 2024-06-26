<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pompa = $_POST['nama_pompa'];
    $merk = $_POST['merk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $tanggal_tambah = $_POST['tanggal_tambah'];

    $query = "INSERT INTO pompa_air (nama_pompa, merk, jumlah, harga, kategori, tanggal_tambah) 
              VALUES ('$nama_pompa', '$merk', '$jumlah', '$harga', '$kategori', '$tanggal_tambah')";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Pompa Air</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Pompa Air</h1>
        <div class="form-container">
            <form method="POST">
                <label for="nama_pompa">Nama Pompa</label>
                <input type="text" id="nama_pompa" name="nama_pompa" required>
                <label for="merk">Merk</label>
                <input type="text" id="merk" name="merk" required>
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" required>
                <label for="harga">Harga</label>
                <input type="number" step="0.01" id="harga" name="harga" required>
                <label for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" required>
                <label for="tanggal_tambah">Tanggal Penambahan</label>
                <input type="date" id="tanggal_tambah" name="tanggal_tambah" required>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>
