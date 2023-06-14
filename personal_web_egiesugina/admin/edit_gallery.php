<?php require_once('../koneksi.php');
// kalau tidak ada id_gallery di query string 
if (!isset($_GET['id_gallery'])) {
    //header('Location: index.php'); 
}
//ambil id_gallery dari query string 
$id_gallery = $_GET['id_gallery'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_gallery WHERE id_gallery=$id_gallery";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<html>

<head>
    <link rel="shortcut icon" href="../images/p.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">


    <title>Halaman Administrator</title>
</head>

<body class="bg-img-admin  ">
    <?php session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    } else {
        $username = $_SESSION['username'];
    }
    ?>
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php require_once './menu.php'; ?>
        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <div class="bg-white container-fluid p-4 ">
                <div class="row">

                    <section class="bg-white min-vh-80-custom">
                        <h2>Edit Gallery</h2>

                        <form action="../admin/proses_editgallery.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_gallery" value="<?php echo $data['id_gallery'] ?>" />
                            <div class="col-md-6">
                                <label class="form-label" for="nama">File Gambar</label>
                                <input class="form-control" value="<?php echo $data['gambar'] ?>" name="gambar" type="file" size="30"
                                    placeholder="Nama Lengkap" />
                                <font color="#FF0000">*silahkan pilih foto</font>
                            </div>
                            <div class="col-md-6">
                                <img src="../admin/images/upload/<?php echo $data['gambar'] ?>" width="100px"
                                    height="100px">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="alamat">Deskripsi</label>
                                <textarea name="deskripsi" rows="15" class="form-control" required>
                                <?php echo $data['deskripsi'] ?>
                                </textarea>
                                <font color="#FF0000">*wajib di isi </font>
                            </div>
                            <div class="col-md-2 mt-3 ">
                                <button type="submit" value="Simpan" name="simpan"
                                    class="btn btn-primary w-100 fw-bold"><i class="bi bi-send-plus"></i>
                                    Simpan</button>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
            <?php require_once './footer.php' ?>
        </main>
    </div>
</body>


</html>