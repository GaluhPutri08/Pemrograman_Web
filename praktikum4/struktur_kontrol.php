<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor"; 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

$nilaiMatematika = [85, 92, 78, 64, 90, 90, 75, 88, 79, 70, 96];

sort($nilaiMatematika);

$nilai_dipakai = array_slice($nilaiMatematika, 2, count($nilaiMatematika) - 4);

$total = array_sum($nilai_dipakai);

$rata = $total / count($nilai_dipakai);

echo "Total nilai setelah mengabaikan 2 tertinggi & 2 terendah: $total <br>";
echo "Rata-rata nilai: $rata";

echo "<br>";

$produk = 120000;

if ($produk > 100000){
    $diskon = $produk * 0.2;
    $bayar = $produk - $diskon;
    echo "Harga yang harus dibayar setelah mendapat diskon 20% : $bayar";
} else {
    echo "Harga yang harus dibayar : Rp $produk";
}

$poin = 650; 

echo "Total skor pemain adalah: $poin <br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>