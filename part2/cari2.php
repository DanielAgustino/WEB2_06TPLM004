<?php
echo "<html>
<body>";

$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$cari = $_POST['nama'];
$cari2 = $_POST['jurusan'];

$query = "SELECT * FROM tabel_mahasiswa WHERE nama LIKE '%$cari%' OR jurusan LIKE '%$cari2%' ORDER BY nama ASC";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Query failed: " . mysqli_error($koneksi));
}

echo "<table border='1'>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jurusan</th>
</tr>";

while ($data = mysqli_fetch_array($hasil)) {
    echo "<tr>
    <td>" . $data['nim'] . "</td>
    <td>" . $data['nama'] . "</td>
    <td>" . $data['alamat'] . "</td>
    <td>" . $data['jurusan'] . "</td>
    </tr>";
}

echo "</table>
</body>
</html>";

mysqli_close($koneksi);
?>
