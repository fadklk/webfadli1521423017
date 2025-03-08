<?php
$host = "192.250.235.41";
$user = "umwfvxkw_akun"; // Sesuaikan dengan user database Anda
$password = "U5iz9xY0:5rYD:"; // Sesuaikan dengan password database Anda
$dbname = "umwfvxkw_akun"; // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_errno) { // Gunakan connect_errno, bukan connect_error sebagai string
    die("Koneksi gagal: (" . $conn->connect_errno . ") " . $conn->connect_error);
}
?>
