<?php 
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = $_POST['email'];
if(filter_var($rmail, FILTER_VALIDATE_EMAIL)) {
    $hasil = "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
} else {
     $hasil = "Email tidak valid. Silakan masukkan format yang benar (misalnya: nama@email.com).";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input PHP Aman</h2>

    <form method="post">
        <label>Masukkan teks:</label>
        <input type="text" name="input">
        <input type="submit" value="Kirim">
    </form>

    <?php if (!empty($input)): ?>
        <p>Hasil input setelah disanitasi: <?= $input ?></p>
    <?php endif; ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Validasi Email Aman</title>
</head>
<body>
    <h2>Form Validasi Email</h2>

    <form method="post">
        <label>Masukkan email:</label>
        <input type="text" name="email" placeholder="contoh: user@gmail.com">
        <input type="submit" value="Cek">
    </form>

    <?php if (!empty($hasil)): ?>
        <p><?= $hasil ?></p>
    <?php endif; ?>
</body>
</html>