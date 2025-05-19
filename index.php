<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.html");
}

include "koneksi.php"; 

$query = "SELECT m. *, p. nama namaProdi FROM mahasiswa m JOIN prodi p on m.id_prodi = p.id";
$data = ambildata($query);

include "templet/header.php";
include "templet/sidebar.php"

?>
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">DATA MAHASISWA</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Data Mahasiswa</h3>
                            <div class="card-tools">
                                <a href="tambahmahasiswa.php" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>TELP</th>
                                        <th>PRODI</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $d["nim"] ?></td>
                                            <td><?= $d["nama"] ?></td>
                                            <td><?= $d["telp"] ?></td>
                                            <td><?= $d["namaProdi"] ?></td>
                                            <td><a href="deletemahasiswa.php?nim=<?= $d["nim"]; ?>"
                                                    onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger">Delete</a>
                                                <a href="editmahasiswa.php?nim=<?= $d["nim"]; ?>" class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="logout.php">keluar</a>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
        </div>
        <!--end::Row-->
    </div>
</main>
<!--end::App Main-->

<?php
include "templet/footer.php";
?>