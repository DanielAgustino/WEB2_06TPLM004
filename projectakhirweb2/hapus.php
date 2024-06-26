<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM pompa_air WHERE id = $id";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>
