<?php require_once('../koneksi.php');
// cek apakah tombol simpan sudah diklik atau blum? 
if (isset($_POST['about'])) {
    // ambil data dari formulir 
    $id = $_POST['id'];
    $about = $_POST['about'];
    // buat query update 
    $sql = "UPDATE tbl_about SET about='$about' WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil? 
    if ($query) {
        // kalau berhasil alihkan ke halaman about 
        header('Location: about.php');
    } else {
        // kalau gagal tampilkan pesan 
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>