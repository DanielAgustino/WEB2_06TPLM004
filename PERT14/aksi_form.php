<?php
// Koneksi dengan basis data
$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Menampung data yang dikirim oleh form
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];

// Memasukkan data ke database
$query = "CALL update_datatable('$kode', '$jumlah')";
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah data berhasil dimasukkan
if ($result) {
    echo "Data berhasil dimasukkan.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Mengalihkan halaman kembali ke form.php
header("location:form.php");
?>