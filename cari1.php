<?php
echo "<html>
<body>";

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari form
$cari = $_POST['nama'];

// Query untuk mencari data
$hasil = mysqli_query($koneksi, "SELECT * FROM tabel_mahasiswa WHERE nama LIKE '%$cari%' ORDER BY nama ASC");

// Cek apakah query berhasil
if (!$hasil) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Membuat tabel untuk menampilkan hasil
echo "<table border='1'>
<tr>
<th>nim</th>
<th>nama</th>
<th>alamat</th>
<th>jurusan</th>
</tr>";

// Menampilkan data
while ($data = mysqli_fetch_array($hasil)) {
    echo "<tr>
<td>" . $data['nim'] . "</td>
<td>" . $data['nama'] . "</td>
<td>" . $data['alamat'] . "</td>
<td>" . $data['jurusan'] . "</td>
</tr>";
}

echo "</table>";

// Menutup koneksi database
mysqli_close($koneksi);

echo "</body>
</html>";
?>
