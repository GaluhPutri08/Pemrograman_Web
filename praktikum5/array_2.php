<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <td><?= $Dosen['nama'] ?></td>
        </tr>
        <tr>
            <th>Domisili</th>
            <td><?= $Dosen['domisili'] ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $Dosen['jenis_kelamin'] ?></td>
        </tr>
    </table>
</body>
</html>
