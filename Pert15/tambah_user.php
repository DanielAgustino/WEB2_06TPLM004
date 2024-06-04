<?php
$username = "ADMIN";
$password = password_hash("admin1", PASSWORD_DEFAULT);

$conn = new mysqli('localhost', 'root', '', 'pert15');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO akun (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Pengguna baru berhasil dibuat";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
