<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.html");
}

include "koneksi.php";

$query = "SELECT m. *, p. nama namaProdi FROM mahasiswa m JOIN prodi p on m.id_prodi = p.id";
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
            <th>PRODI</th>
            <th>AKSI</th>
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
    <td><?= $d["namaProdi"]?></td>
    <td><a href="deletemahasiswa.php?nim=<?= $d["nim"];?>"
    onclick="return confirm('Yakin ingin hapus?')">Delete</a> |
     <a href="editmahasiswa.php?nim=<?= $d["nim"];?>">Edit</a></td>

    </tr>
<?php endforeach; ?>
</tbody>
 
</table>
  <a href="logout.php">keluar</a>
</body>
</html> 