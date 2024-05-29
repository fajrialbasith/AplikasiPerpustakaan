<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");
require_once("../template/header.php");
$title = "Edit Data User";
require_once("../template/navbar.php");
require_once("../template/sidebar.php");

$username = $_GET['username'];

$userdata = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$data = mysqli_fetch_array($userdata);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">Edit Data User</li>
            </ol>

            <div class="card">
                <form action="proses-user.php" method="POST">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-square-pen-to-square me-2 mt-2"></i>Edit Data User</span>
                        <button type="submit" name="update" class="btn btn-primary float-end ms-1"><i class="fa-solid fa-floppy-disk me-2"></i>Update</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Username</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="username" class="form-control" id="username" value="<?= $username ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Email</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="text" name="email" class="form-control" id="email" value="<?= $data['email'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Baru" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-sm-2 col-form-label">Role</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -20px;">
                                            <select class="form-select" name="role" aria-label="Default select example" required>
                                                <option selected>Pilih Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="mahasiswa">Mahasiswa</option>
                                            </select>
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