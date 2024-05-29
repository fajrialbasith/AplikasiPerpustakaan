<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");

$username = $_GET['username'];

mysqli_query($koneksi, "DELETE FROM mastermahasiswa WHERE username = '$username'");

echo "<script>
alert('Data berhasil Dihapus');
document.location.href = 'datauser.php';  
</script>";
return;
