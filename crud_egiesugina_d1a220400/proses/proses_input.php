<?php
include('koneksi.php');
// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    // buat query
    $sql = "INSERT INTO tbl_mahasiswa (nama, alamat, jk, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$asal_sekolah')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman input_data.php dengan status=sukses
        header('Location: ../input_data.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman input_data.php dengan status=gagal
        header('Location: ../input_data.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>