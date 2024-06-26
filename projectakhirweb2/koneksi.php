<?php
$host = "localhost";
$user = "id22372098_daniel_agustino";
$password = "Pompa_123";
$database = "id22372098_inventory_pompa_air";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
