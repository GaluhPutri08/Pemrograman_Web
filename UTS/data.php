<?php
include("config.php");

$query = "SELECT * FROM \"TB_pendaki\" ORDER BY tanggal_lihat DESC";
$result = pg_query($conn, $query);
?>

<h2>Daftar Pengunjung Website Gunung Butak</h2>
<table border="1" cellpadding="8">
  <tr>
    <th>Nama</th>
    <th>Jalur</th>
    <th>Tanggal Lihat</th>
  </tr>

<?php
while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['jalur'] . "</td>";
    echo "<td>" . $row['tanggal_lihat'] . "</td>";
    echo "</tr>";
}
pg_close($conn);
?>
</table>
