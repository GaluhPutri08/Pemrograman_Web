<?php
// config.php, untuk koneksi ke database postgreSQL
$host = "localhost";
$port = "5432"; 
$dbname = "phpdatabase_buthak"; 
$user = "postgres"; 
$password = "12345678"; 

// Membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Cek koneksi
if (!$conn) {
    die("❌ Koneksi gagal: " . pg_last_error());
}
// echo "✅ Koneksi berhasil";

?>


