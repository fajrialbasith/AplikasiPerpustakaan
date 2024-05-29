<?php

// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once "../koneksi.php";
$title = "Data User";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php"> Home </a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list me-2 mt-2"></i>User</span>
                    <a href="<?= $main_url ?>user/add-user.php" class="btn btn-sm btn-primary float-end">Tambah Data</a>

                </div>
                <div class="card-body" >
                    <table class="table table-hover" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $queryUser = mysqli_query($koneksi, "SELECT * FROM user");
                            while ($data = mysqli_fetch_array($queryUser)) { ?>

                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $data['username'] ?></td>
                                    <td><?= $data['email'] ?></td>
                                    <td><?= $data['role'] ?></td>
                                    <td align="center">
                                        <a href="edit-user.php?username=<?= $data['username']?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen" title="Update Data"></i> </a>
                                        <a href="hapus-user.php?username=<?= $data['username']?>" class="btn btn-sm btn-danger" title="Hapus Data" onclick = "return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash" ></i> </a>
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