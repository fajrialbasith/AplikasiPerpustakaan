<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");

$NimMhs = $_GET['NimMhs'];

mysqli_query($koneksi, "DELETE FROM mastermahasiswa WHERE NimMhs = '$NimMhs'");

echo "<script>
alert('Data berhasil Dihapus');
document.location.href = 'mhsiswa.php';  
</script>";
return;
