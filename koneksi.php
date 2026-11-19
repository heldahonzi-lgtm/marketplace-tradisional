<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "marketplace";
$conn = mysqli_connect($host, $user, $pass, $db);
$koneksi = $conn;
if(!$conn){ die("Koneksi gagal: ".mysqli_connect_error()); }
?>
