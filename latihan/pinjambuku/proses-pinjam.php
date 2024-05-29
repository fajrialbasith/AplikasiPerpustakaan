<?php
// session_start();

// if (!isset($_SESSION["sesLogin"])){
//     header("Location: ../auth/login.php");
//     exit();
// }

require_once("../koneksi.php");

$date = date('Y-m-d');

if (isset($_POST['simpan'])) {




    $IdBuku = $_POST['IdBuku'];
    $NamaBuku = htmlspecialchars($_POST['NamaBuku']);
    $NimMhs = ($_POST['NimMhs']);
    $TglPinjam = ($_POST['TglPinjam']);
    $TglKembali = ($_POST['TglKembali']);
    $LamaPinjam = ($_POST['LamaPinjam']);

    $cekMhs = mysqli_query($koneksi, "SELECT * from mastermahasiswa where NimMhs = '$NimMhs'");
    $cekBuku = mysqli_query($koneksi, "SELECT * from masterbuku m inner join stokbuku s on m.IdBuku = s.IdBuku where m.IdBuku = '$IdBuku'");

    if ($cekMhs['TanggalMasuk'] < $date || $cekBuku['stok'] === 0) {

        echo "<script>
                alert('Tidak Berhasil Menambah Data');
                document.location.href = 'datapinjam.php';  
    </script>";
        return;
    } else if ($cekMhs['TanggalMasuk'] > $date || $cekBuku['stok'] > 0) {

        mysqli_query($koneksi, "INSERT INTO transaksipeminjaman VALUES('$IdBuku','$NamaBuku','$NimMhs','$TglKembali','$TglPinjam','$LamaPinjam')");

        echo "<script>
                alert('Data berhasil tersimpan');
                document.location.href = 'datapinjam.php';  
    </script>";
        return;
    } else if (isset($_POST['update'])) {
        $IdBuku = $_POST['IdBuku'];
        $NamaBuku = htmlspecialchars($_POST['NamaBuku']);
        $NimMhs = ($_POST['NimMhs']);
        $TglPinjam = ($_POST['TglPinjam']);
        $TglKembali = ($_POST['TglKembali']);
        $LamaPinjam = ($_POST['LamaPinjam']);


        mysqli_query($koneksi, "UPDATE masterbuku SET
                    NamaBuku = '$NamaBuku'
                    NimMhs = '$NimMhs'
                    TglPinjam = '$TglPinjam'
                    TglKembali = '$TglKembali'
                    LamaPinjam = '$LamaPinjam'
                    WHERE IdBuku = '$IdBuku'
                        ");

        echo "<script>
alert('Data berhasil di Update');
document.location.href = 'datapinjam.php';  
</script>";
        return;
    }
}
