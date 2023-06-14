<?php require_once('../koneksi.php');
// cek apakah tombol daftar sudah diklik atau blum? 
if (isset($_POST['simpan'])) {
    // ambil data dari formulir 
    $deskripsi = $_POST['deskripsi'];
    $name = $_FILES['gambar']['name'];
    $file = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($file, "../admin/images/upload/$name");
    $sql = "INSERT INTO tbl_gallery (deskripsi, gambar) VALUE ('$deskripsi','$name')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil? 
    if ($query) {
        header('Location: data_gallery.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>