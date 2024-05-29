<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");
require_once("../template/header.php");
$title = "Edit Data Pinjaman";
require_once("../template/navbar.php");
require_once("../template/sidebar.php");

$IdBuku = $_GET['IdBuku'];

$datapinjam = mysqli_query($koneksi, "SELECT * FROM transaksipeminjaman WHERE IdBuku = '$IdBuku'");
$data = mysqli_fetch_array($datapinjam);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Pinjaman</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Edit Data Pinjaman</li>
            </ol>

            <div class="card">
                <form action="proses-pinjam.php" method="POST">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-pen-to-square me-2 mt-2"></i>Edit Data Pinjaman</span>
                        <button type="submit" name="update" class="btn btn-primary float-end ms-1"><i class="fa-solid fa-floppy-disk me-2"></i>Update</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="IdBuku" class="col-sm-2 col-form-label">ID Buku</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="IdBuku" class="form-control" id="IdBuku" value="<?= $IdBuku ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Judul Buku</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NamaBuku" class="form-control" id="NamaBuku" value="<?= $data['NamaBuku'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">NIM Peminjam</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NimMhs" class="form-control" id="NimMhs" value="<?= $data['NimMhs'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="date" name="TglPinjam" class="form-control" id="TglPinjam" value="<?= $data['TglPinjam'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="date" name="TglKembali" class="form-control" id="TglKembali" value="<?= $data['TglKembali'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Lama Pinjaman</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="LamaPinjam" class="form-control" id="LamaPinjam" value="<?= $data['LamaPinjam'] ?>" required>
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