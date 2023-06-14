<?php
include('koneksi.php');
// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    // buat query update
    $sql = "UPDATE tbl_mahasiswa SET nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php
        header('Location: ../index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>