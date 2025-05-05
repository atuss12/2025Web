<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
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
   <h1>Data Prodi</h1>
   <br>
    <table border ="1" cellspacing = "0" cellpadding = "5">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Nama Kaprodi</th>
            <th>Jurusan</th>
        </thead>
</body>

<tbody>
<?php 
$i = 1;
foreach($data as $d) : ?>
<tr>
    <td><?= $i++; ?></td>
    <td><?= $d["nama"]?></td>
    <td><?= $d["kaprodi"]?></td>
    <td><?= $d["jurusan"]?></td>
</tr>
<?php endforeach; ?>
</tbody>

</table>
</body>
</html>