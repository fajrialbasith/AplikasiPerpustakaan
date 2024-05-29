<?php
require_once("../koneksi.php");

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $pass = password_hash($password, PASSWORD_DEFAULT);


    $cekUsername = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cekUsername) > 0) {
        header("location:add-user.php?msg=cancel");
        return;
    }

    mysqli_query($koneksi, "INSERT INTO user VALUES( '$username','$email','$pass','$role')");

    header("location:add-user.php?msg=added");
    return;
}else if (isset($_POST['update'])) {
    $pass = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = password_hash($password, PASSWORD_DEFAULT);



    mysqli_query($koneksi, "UPDATE user SET
                    email = '$email'
                    pass = '$pass',
                    role = '$role'
                    WHERE username = '$username'
                        ");

    echo "<script>
alert('Data berhasil di Update');
document.location.href = 'mhsiswa.php';  
</script>";
    return;
}
