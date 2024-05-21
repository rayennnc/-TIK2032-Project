<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "DELETE FROM users WHERE nama = 'test'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>