<?php require_once('../koneksi.php');
// cek apakah tombol simpan sudah diklik atau blum? 
if (isset($_POST['simpan'])) {
    // ambil data dari formulir 
    $id_gallery = $_POST['id_gallery'];
    $deskripsi = $_POST['deskripsi'];

    if ($_FILES['gambar']['size'] !== 0) {
        $name = $_FILES['gambar']['name'];
        $file = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($file, "../admin/images/upload/$name");
        $sql = "UPDATE tbl_gallery SET deskripsi='$deskripsi', gambar='$name' WHERE id_gallery='$id_gallery'";
        # code...
    } else {

        $sql = "UPDATE tbl_gallery SET deskripsi='$deskripsi'  WHERE id_gallery='$id_gallery'";
    }
    // buat query update 

    $query = mysqli_query($db, $sql);
    // apakah query update berhasil? 
    if ($query) {
        // kalau berhasil alihkan ke halaman data gallery 
        header('Location: data_gallery.php');
    } else {
        // kalau gagal tampilkan pesan 
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>