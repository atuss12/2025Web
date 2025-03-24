<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>

<body>
<h1>Data Mahasiswa</h1>
    <br>
    <a href="tambahmahasiswa.php">Tambah</a>
    <table border ="1" cellspacing = "0" cellpadding = "5">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>TELP</th>
        </thead>
</body>
</body>
<tbody>
<?php 
$i = 1;
foreach($data as $d) : ?>
<tr>
    <td><?= $i++; ?></td>
    <td><?= $d["nim"]?></td>
    <td><?= $d["nama"]?></td>
    <td><?= $d["telp"]?></td>
</tr>
<?php endforeach; ?>
</tbody>

</table>
</body>
</html>