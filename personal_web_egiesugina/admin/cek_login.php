<?php session_start();
require_once('../koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from tbl_user where username='$username' ";
$query = mysqli_query($db, $sql);
$rows = mysqli_num_rows($query);
$hasil = mysqli_fetch_array($query);
if ($rows == 0) {
    echo "user belum terdaftar";
    echo "<a href=\"login.php\"> back</a>";
} else {
    if ($password <> $hasil['password']) {
        echo "password salah";
        echo "<a href=\"login.php\"> back</a>";
    } else {
        $_SESSION['username'] = "$username";
        header('location:beranda_admin.php');
    }
} ?>