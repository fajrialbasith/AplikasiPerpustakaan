<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");

if (isset($_POST['simpan'])) {

    $IdBuku = $_POST['IdBuku'];
    $NamaBuku = htmlspecialchars($_POST['NamaBuku']);

    mysqli_query($koneksi, "INSERT INTO masterbuku VALUES('$IdBuku','$NamaBuku')");

    echo "<script>
                alert('Data berhasil tersimpan');
                document.location.href = 'databuku.php';  
    </script>";
    return;
} else if (isset($_POST['update'])) {
    $IdBuku = $_POST['IdBuku'];
    $NamaBuku = htmlspecialchars($_POST['NamaBuku']);


    mysqli_query($koneksi, "UPDATE masterbuku SET
                    NamaBuku = '$NamaBuku'
                    WHERE IdBuku = '$IdBuku'
                        ");

    echo "<script>
alert('Data berhasil di Update');
document.location.href = 'databuku.php';  
</script>";
    return;
}
