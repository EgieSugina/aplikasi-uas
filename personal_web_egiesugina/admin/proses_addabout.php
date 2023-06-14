<?php require_once('../koneksi.php');
// cek apakah tombol daftar sudah diklik atau blum? 
if (isset($_POST['about'])) {
    // ambil data dari formulir 
    $about = $_POST['about'];
    // buat query 
    $sql = "INSERT INTO tbl_about (about) VALUE ('$about')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil? 
    if ($query) {
        header('Location: about.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>