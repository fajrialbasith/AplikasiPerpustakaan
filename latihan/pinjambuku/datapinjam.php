<?php

// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once "../koneksi.php";
$title = "Data Peminjam";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Peminjam</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Data Peminjam</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list me-2 mt-2"></i>Data Peminjam</span>
                    <a href="<?= $main_url ?>pinjambuku/add-pinjam.php" class="btn btn-sm btn-primary float-end">Tambah Data</a>

                </div>
                <div class="card-body">
                    <table class="table table-hover" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Buku </th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">NIM Peminjam</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Lama Pinjam</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $queryPinjam = mysqli_query($koneksi, "SELECT * FROM transaksipeminjaman");
                            while ($data = mysqli_fetch_array($queryPinjam)) { ?>

                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $data['IdBuku'] ?></td>
                                    <td><?= $data['NamaBuku'] ?></td>
                                    <td><?= $data['NimMhs'] ?></td>
                                    <td><?= $data['TglPinjam'] ?></td>
                                    <td><?= $data['TglKembali'] ?></td>
                                    <td><?= $data['LamaPinjam'] ?></td>
                                    <td align="center">
                                        <a href="edit-pinjam.php?IdBuku=<?= $data['IdBuku'] ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen" title="Update Data"></i> </a>
                                        <a href="hapus-pinjam.php?IdBuku=<?= $data['IdBuku'] ?>" class="btn btn-sm btn-danger" title="Hapus Data" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i> </a>
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