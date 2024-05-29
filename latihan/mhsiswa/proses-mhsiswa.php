<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");

if (isset($_POST['simpan'])) {

    $NimMhs = $_POST['NimMhs'];
    $NamaMhs = htmlspecialchars($_POST['NamaMhs']);
    $TanggalMasuk = $_POST['TanggalMasuk'];

    mysqli_query($koneksi, "INSERT INTO mastermahasiswa VALUES('$NimMhs','$NamaMhs','$TanggalMasuk')");

    echo "<script>
                alert('Data berhasil tersimpan');
                document.location.href = 'add-mhsiswa.php';  
    </script>";
    return;
} else if (isset($_POST['update'])) {
    $NimMhs = $_POST['NimMhs'];
    $NamaMhs = htmlspecialchars($_POST['NamaMhs']);
    $TanggalMasuk = $_POST['TanggalMasuk'];


    mysqli_query($koneksi, "UPDATE mastermahasiswa SET
                    NamaMhs = '$NamaMhs',
                    TanggalMasuk = '$TanggalMasuk'
                    WHERE NimMhs = '$NimMhs'
                        ");

    echo "<script>
alert('Data berhasil di Update');
document.location.href = 'mhsiswa.php';  
</script>";
    return;
}
