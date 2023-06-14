<?php require_once('../koneksi.php');
// kalau tidak ada id di query string 
if (!isset($_GET['id'])) {
    //header('Location: index.php'); 
}
//ambil id dari query string 
$id = $_GET['id'];
// buat query untuk ambil data dari database 
$sql = "SELECT * FROM tbl_about WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>



<?php require_once('../koneksi.php'); ?>
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
                <form action="../admin/proses_editabout.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                    <textarea name="about" id="editor" style="height: 50vh;">
                    <?php echo $data['about'] ?>
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