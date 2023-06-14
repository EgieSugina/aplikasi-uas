<?php require_once('../koneksi.php');
// cek apakah tombol daftar sudah diklik atau blum? 
if (isset($_POST['simpan'])) { // ambil data dari formulir 
    $nama_artikel = $_POST['nama_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    // buat query 
    $sql = "INSERT INTO tbl_artikel (nama_artikel, isi_artikel) VALUE ('$nama_artikel','$isi_artikel')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil? 
    if ($query) {
        header('Location: data_artikel.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
} ?>