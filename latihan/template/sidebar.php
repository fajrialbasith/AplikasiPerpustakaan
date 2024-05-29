


<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="<?= $main_url  ?>index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Admin</div>
                    <a class="nav-link" href="<?= $main_url  ?>user/datauser.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        User
                    </a>

                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Data</div>
                    <a class="nav-link" href="<?= $main_url  ?>mhsiswa/mhsiswa.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Daftar Mahasiswa
                    </a>
                    <a class="nav-link" href="<?= $main_url  ?>databuku/databuku.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-book ms-1 me-1"></i></div>
                        Daftar Buku
                    </a>
                    <a class="nav-link" href="<?= $main_url  ?>pinjambuku/datapinjam.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        History Peminjaman
                    </a>

                    <hr class="mb-0">

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= "Admin" ?>
            </div>
        </nav>
    </div>