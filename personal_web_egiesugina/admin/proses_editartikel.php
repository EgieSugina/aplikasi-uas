<?php require_once('../koneksi.php');
// cek apakah tombol simpan sudah diklik atau blum? 
if (isset($_POST['simpan'])) {
    // ambil data dari formulir 
    $id_artikel = $_POST['id_artikel'];
    $nama_artikel = $_POST['nama_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    // buat query update 
    $sql = "UPDATE tbl_artikel SET nama_artikel='$nama_artikel', isi_artikel='$isi_artikel' WHERE id_artikel='$id_artikel'";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil? 
    if ($query) {
        // kalau berhasil alihkan ke halaman data artikel 
        header('Location: data_artikel.php');
    } else {

        // kalau gagal tampilkan pesan 
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>