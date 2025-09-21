<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);
echo "<br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob',3],
    ['Charlie',9],
    ['David',5],
    ['Eva',6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',', $karyawanPengalamanLimaTahun);
echo "<br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90],
];

$total = 0;
for ($i = 0; $i < count($daftarNilai); $i++) {
    $total += $daftarNilai[$i][1];
}

$rata = $total / count($daftarNilai);

echo "Rata-rata kelas: $rata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

for ($i = 0; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i][1] > $rata) {
        echo "Nama: {$daftarNilai[$i][0]}, Nilai: {$daftarNilai[$i][1]} <br>";
    }
}
?>


