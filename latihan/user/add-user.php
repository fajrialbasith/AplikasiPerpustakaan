<?php
require_once "../koneksi.php";
$title = "Tambah User";

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}

$alert = '';
if ($msg == 'cancel') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class = fa-solid fa-xmark"></i> Tambah user gagal, username sudah ada.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if ($msg == 'added') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class = fa-solid fa-circle-check"></i> Tambah user berhasil !
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>
<link href="<?= $main_url ?>asset/sb-admin/css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


<div id="layoutAuthentication" style="background-color: rgba(197, 197, 197, 0.562);
">
    <main>
        <div class="container px-5">
            <h1 class="mt-3 my-3 ">Daftar</h1>

            <form action="proses-user.php" method="POST">
                <?php
                if ($msg !== '') {
                    echo $alert;
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <span class="h5"><i class="fa-solid fa-square-plus me-3 mt-2"></i>Isi Data Diri Anda</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 row">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" pattern="[A-Za-z0-9]{3,}" title="minimal 3 karakter kombinasi huruf besar, kecil dan angka" class="form-control border-0 border-bottom" id="username" name="username" maxlength="20" placeholder="Username anda" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="email" name="email" placeholder="Alamat Email Anda" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="password" class="form-control border-0 border-bottom" id="password" name="password" placeholder="Kata Sandi Baru" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                                    <label for="" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <select class="form-select" name="role" aria-label="Default select example">
                                            <option selected>Pilih Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col">
                                        <button type="submit" name="simpan" class="btn btn-primary float-center m-1"><i class="fa-solid fa-floppy-disk mx-1"></i>Simpan</button>
                                        <button type="reset" name="reset" class="btn btn-danger float-center m-1"><i class="fa-solid fa-xmark mx-1"></i>Reset</button>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="../auth/login.php">Sudah punya akun?</a></div>
                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php

    require_once "../template/footer.php";


    ?>