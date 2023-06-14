<?php require_once('../koneksi.php'); ?>
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
    require_once("../koneksi.php");
    $sql = "SELECT * FROM tbl_user WHERE username = '$username'";
    $query = mysqli_query($db, $sql);
    $hasil = mysqli_fetch_array($query); ?>
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php require_once './menu.php'; ?>
        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <div class="bg-white container-fluid p-4 ">
                <div class="row">

                    <section class="bg-white min-vh-80-custom">
                        <h2>Add Gallery</h2>

                        <form action="../admin/proses_addgallery.php" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <label class="form-label" for="nama">File Gambar</label>
                                <input class="form-control" name="gambar" type="file" size="30"
                                    placeholder="silahkan pilih foto" />
                                <font color="#FF0000">*silahkan pilih foto</font>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="alamat">Deskripsi</label>
                                <textarea name="deskripsi" rows="15" class="form-control" required>

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