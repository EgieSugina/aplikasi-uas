<html>

<head>
    <link rel="shortcut icon" href="../images/p.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../scripts/ckeditor.js"></script>
    <script src="../scripts/sample.js"></script>

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
            <section class="bg-white min-vh-80-custom">
                <form action="../admin/proses_addartikel.php" method="post">
                    <div class="col-md-6 p-4">
                        <label class="form-label" for="nama">Nama Artikel</label>
                        <input class="form-control" name="nama_artikel" type="teks" placeholder="Nama Artikel..." />
                        <font color="#FF0000">*wajib di isi </font>

                    </div>
                    <textarea name="isi_artikel" id="editor" style="height: 50vh;">
                    <h1>Isi Disini.....</h1>
                     <!-- #region -->
                </textarea>

                    <!-- <p> <input type="submit" class="search-button" name="simpan" value="Simpan" /> </p> -->
                </form>

            </section>
            <?php require_once './footer.php' ?>

        </main>
    </div>
</body>
<script>

    initSample();
</script>

</html>