<?php include('../koneksi.php');
if (isset($_GET['id_gallery'])) {
    // ambil id_gallery dari query string 
    $id_gallery = $_GET['id_gallery'];
    // buat query hapus 
    $sql = "DELETE FROM `tbl_gallery` WHERE id_gallery='$id_gallery'";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil? 
    if ($query) {
        header('Location: data_gallery.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
} ?>