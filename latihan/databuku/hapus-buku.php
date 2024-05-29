<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");

$IdBuku = $_GET['IdBuku'];

mysqli_query($koneksi, "DELETE FROM masterbuku WHERE IdBuku = '$IdBuku'");

echo "<script>
alert('Data berhasil Dihapus');
document.location.href = 'databuku.php';  
</script>";
return;
