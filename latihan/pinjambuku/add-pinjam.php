<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");
require_once("../template/header.php");
$title = "Data Pinjaman Buku";
require_once("../template/navbar.php");
require_once("../template/sidebar.php");

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Pinjaman</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Tambah Data Pinjaman</li>
            </ol>

            <div class="card">
                <form action="proses-pinjam.php" method="POST">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-plus me-2 mt-2"></i>Tambah Data Buku</span>
                        <button type="submit" name="simpan" class="btn btn-primary float-end ms-1"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger float-end"><i class="fa-solid fa-xmark me-2"></i>Reset</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">ID Buku</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="IdBuku" class="form-control" id="IdBuku" placeholder="Masukkan ID Buku" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Judul Buku</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NamaBuku" class="form-control" id="NamaBuku" placeholder="Masukkan Judul Buku" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">NIM Peminjam</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NimMhs" class="form-control" id="NimMhs" placeholder="Masukkan NIM Peminjam" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="date" name="TglPinjam" class="form-control" id="TglPinjam" placeholder="Masukkan Tanggal" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="date" name="TglKembali" class="form-control" id="TglKembali" placeholder="Masukkan Tanggal" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Lama Pinjam / Hari</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="LamaPinjam" class="form-control" id="LamaPinjam" placeholder="Masukkan Dalam Jumlah Hari" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </main>




    <?php
    require_once("../template/footer.php");
    ?>
</div>