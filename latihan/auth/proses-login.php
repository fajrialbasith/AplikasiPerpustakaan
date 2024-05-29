<?php
require_once "../koneksi.php";

$username = null;
$password = null;

if (isset($_POST['login'])) {

    $username = ($_POST['username']);
    $password = ($_POST['password']);

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE 
    username ='$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);


        if (password_verify($password, $row['password'])) {
            header("location:../index.php");
            exit;
        } else {
            echo "<script>
                        alert('Password salah..');
                        document.location.href= 'login.php';
                        </script>";
        }
    } else {
        echo "<script>
                alert('Username tidak terdaftar..');
            document.location.href= 'login.php';
            </script>";
    }

}
