<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");
require_once("../template/header.php");
$title = "Tambah Data Mahasiswa";
require_once("../template/navbar.php");
require_once("../template/sidebar.php");

$queryNIM = mysqli_query($koneksi, "SELECT max(NimMhs) as maxnim FROM MasterMahasiswa");
$data = mysqli_fetch_array($queryNIM);
$maxnim = $data['maxnim'];

$noUrut = (int) substr($maxnim, 3, 3);
$noUrut++;
$maxnim = "NIM" . sprintf("%03s", $noUrut);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
            </ol>

            <div class="card">
                <form action="proses-mhsiswa.php" method="POST">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-plus me-2 mt-2"></i>Tambah Data Mahasiswa</span>
                        <button type="submit" name="simpan" class="btn btn-primary float-end ms-1"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger float-end"><i class="fa-solid fa-xmark me-2"></i>Reset</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NimMhs" class="form-control" id="nim" value="<?= $maxnim ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">Nama</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="NamaMhs" class="form-control" id="nama" placeholder="Masukkan Nama Anda" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="date" name="TanggalMasuk" class="form-control" id="tglMasuk" placeholder="Masukkan Tanggal Masuk Anda" required>
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