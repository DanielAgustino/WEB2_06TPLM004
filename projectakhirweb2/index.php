<?php
include 'koneksi.php';
include 'auth.php';
cek_login();

$nama_pompa = '';
$kategori = '';
$tanggal_tambah = '';
$whereClauses = [];

if (isset($_GET['cari'])) {
    $nama_pompa = $_GET['nama_pompa'];
    $kategori = $_GET['kategori'];
    $tanggal_tambah = $_GET['tanggal_tambah'];
    
    if (!empty($nama_pompa)) {
        $whereClauses[] = "nama_pompa LIKE '%$nama_pompa%'";
    }
    if (!empty($kategori)) {
        $whereClauses[] = "kategori LIKE '%$kategori%'";
    }
    if (!empty($tanggal_tambah)) {
        $whereClauses[] = "tanggal_tambah = '$tanggal_tambah'";
    }
}

$whereSQL = '';
if (count($whereClauses) > 0) {
    $whereSQL = 'WHERE ' . implode(' AND ', $whereClauses);
}

$query = "SELECT * FROM pompa_air $whereSQL";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Pompa Air</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Inventaris Pompa Air</h1>
        <p>Selamat datang, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
        <a href="tambah.php" class="add-data">Tambah Data</a>

        <div class="search-container">
            <form method="GET">
                <label for="nama_pompa">Nama Pompa</label>
                <input type="text" id="nama_pompa" name="nama_pompa" value="<?php echo $nama_pompa; ?>">
                <label for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" value="<?php echo $kategori; ?>">
                <label for="tanggal_tambah">Tanggal Penambahan</label>
                <input type="date" id="tanggal_tambah" name="tanggal_tambah" value="<?php echo $tanggal_tambah; ?>">
                <button type="submit" name="cari">Cari</button>
            </form>
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Pompa</th>
                    <th>Merk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Tanggal Penambahan</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$data['nama_pompa']."</td>";
                    echo "<td>".$data['merk']."</td>";
                    echo "<td>".$data['jumlah']."</td>";
                    echo "<td>".$data['harga']."</td>";
                    echo "<td>".$data['kategori']."</td>";
                    echo "<td>".$data['tanggal_tambah']."</td>";
                    echo "<td><a href='edit.php?id=".$data['id']."'>Edit</a> | <a href='hapus.php?id=".$data['id']."' onclick='return confirm(\"Apakah anda yakin?\")'>Hapus</a></td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
