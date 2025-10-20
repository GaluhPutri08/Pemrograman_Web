<?php
// proses_lanjut.php
// File ini berfungsi untuk menerima data dari form_lanjut.php dan menampilkannya kembali

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? htmlspecialchars($_POST['jenis_kelamin']) : '';
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];

    echo "<h2>Data yang Anda Kirim:</h2>";
    echo "Nama: $nama <br>";
    echo "Email: $email <br>";
    echo "Jenis Kelamin: $jenis_kelamin <br>";
    echo "Hobi: ";

    if (!empty($hobi)) {
        echo implode(", ", array_map('htmlspecialchars', $hobi));
    } else {
        echo "Tidak ada hobi yang dipilih.";
    }
} else {
    echo "<h3>Tidak ada data yang dikirim!</h3>";
}
?>
