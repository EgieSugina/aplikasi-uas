<?php require_once('../koneksi.php');
if (isset($_GET['id_artikel'])) {
    // ambil id_artikel dari query string 
    $id_artikel = $_GET['id_artikel'];
    // buat query hapus 
    $sql = "DELETE FROM tbl_artikel WHERE id_artikel=$id_artikel";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil? 
    if ($query) {
        header('Location: data_artikel.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>