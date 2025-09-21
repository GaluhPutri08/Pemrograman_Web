<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

$hasilsama = $a ==$b;
$hasilTidaksama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilsama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah $a == $b ? " . ($hasilsama ? 'true' : 'false') . "<br>";
echo "Apakah $a != $b ? " . ($hasilTidaksama ? 'true' : 'false') . "<br>";
echo "Apakah $a < $b ? " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah $a > $b ? " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah $a <= $b ? " . ($hasilLebihKecilsama ? 'true' : 'false') . "<br>";
echo "Apakah $a >= $b ? " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "Apakah $a && $b ? " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Apakah $a || $b ? " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Apakah !$a ? " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Apakah !$b ? " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
echo "Setelah a += b, nilai a = $a <br>";
$a -= $b;
echo "Setelah a -= b, nilai a = $a <br>";
$a *= $b;
echo "Setelah a *= b, nilai a = $a <br>";
$a /= $b;
echo "Setelah a /= b, nilai a = $a <br>";
$a %= $b;
echo "Setelah a /= b, nilai a = $a <br>";

$a = 10;       
$b = 5;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah $a === $b ? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah $a !== $b ? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

$c = 45;
$d = 28; 

$kosong = $c - $d; // kursi kosong
$persenKosong = ($kosong / $c) * 100; // hitung persen

echo "Jumlah kursi kosong: {$kosong} <br>";
echo "hasil persen dari kursi yang masih kosong adalah: {$persenKosong} %<br> ";
?>