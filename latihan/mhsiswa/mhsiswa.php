<?php

// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once "../koneksi.php";
$title = "Data Mahasiswa";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list me-2 mt-2"></i>Mahasiswa</span>
                    <a href="<?= $main_url ?>mhsiswa/add-mhsiswa.php" class="btn btn-sm btn-primary float-end">Tambah Data</a>

                </div>
                <div class="card-body" >
                    <table class="table table-hover" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM Mahasiswa</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $querySiswa = mysqli_query($koneksi, "SELECT * FROM mastermahasiswa");
                            while ($data = mysqli_fetch_array($querySiswa)) { ?>

                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $data['NimMhs'] ?></td>
                                    <td><?= $data['NamaMhs'] ?></td>
                                    <td><?= $data['TanggalMasuk'] ?></td>
                                    <td align="center">
                                        <a href="edit-mhs.php?NimMhs=<?= $data['NimMhs']?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen" title="Update Data"></i> </a>
                                        <a href="hapus-mhs.php?NimMhs=<?= $data['NimMhs']?>" class="btn btn-sm btn-danger" title="Hapus Data" onclick = "return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash" ></i> </a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        require_once "../template/footer.php";
        ?>
    </main>




</div>