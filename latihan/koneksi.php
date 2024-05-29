
<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_latihan");

if (mysqli_connect_errno()) {
    echo ("Gagal Connect");
} else {
    echo ("Berhasil Connect");
}

$main_url = "http://localhost/latihan/";

?>
