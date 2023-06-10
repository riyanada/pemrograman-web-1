<?php
$servername = "localhost";
$database = "kul_db_web1";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
