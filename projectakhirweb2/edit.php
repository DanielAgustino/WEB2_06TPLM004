<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM pompa_air WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pompa = $_POST['nama_pompa'];
    $merk = $_POST['merk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $tanggal_tambah = $_POST['tanggal_tambah'] ? $_POST['tanggal_tambah'] : NULL;

    $query = "UPDATE pompa_air 
              SET nama_pompa='$nama_pompa', merk='$merk', jumlah='$jumlah', harga='$harga', kategori='$kategori', tanggal_tambah='$tanggal_tambah' 
              WHERE id='$id'";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Pompa Air</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Pompa Air</h1>
        <div class="form-container">
            <form method="POST">
                <label for="nama_pompa">Nama Pompa</label>
                <input type="text" id="nama_pompa" name="nama_pompa" value="<?php echo $data['nama_pompa']; ?>" required>
                <label for="merk">Merk</label>
                <input type="text" id="merk" name="merk" value="<?php echo $data['merk']; ?>" required>
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" value="<?php echo $data['jumlah']; ?>" required>
                <label for="harga">Harga</label>
                <input type="number" step="0.01" id="harga" name="harga" value="<?php echo $data['harga']; ?>" required>
                <label for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>" required>
                <label for="tanggal_tambah">Tanggal Penambahan</label>
                <input type="date" id="tanggal_tambah" name="tanggal_tambah" value="<?php echo $data['tanggal_tambah']; ?>" required>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
