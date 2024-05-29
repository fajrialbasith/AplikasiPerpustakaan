<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");
require_once("../template/header.php");
$title = "Edit Data Mahasiswa";
require_once("../template/navbar.php");
require_once("../template/sidebar.php");

$NimMhs = $_GET['NimMhs'];

$mhsiswa = mysqli_query($koneksi, "SELECT * FROM mastermahasiswa WHERE NimMhs = '$NimMhs'");
$data = mysqli_fetch_array($mhsiswa);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Edit Data Mahasiswa</li>
            </ol>

            <div class="card">
                <form action="proses-mhsiswa.php" method="POST">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-pen-to-square me-2 mt-2"></i>Edit Data Mahasiswa</span>
                        <button type="submit" name="update" class="btn btn-primary float-end ms-1"><i class="fa-solid fa-floppy-disk me-2"></i>Update</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NimMhs" class="form-control" id="nim" value="<?= $NimMhs ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">Nama</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NamaMhs" class="form-control" id="nama" value="<?= $data['NamaMhs'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="date" name="TanggalMasuk" class="form-control" id="tglMasuk" value="<?= $data['TanggalMasuk'] ?>" required>
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