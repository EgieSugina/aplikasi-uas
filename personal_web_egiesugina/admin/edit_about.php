<?php include('../koneksi.php');
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
<html>

<head>
    <link rel="shortcut icon" href="../images/p.jpg" />
    <link rel="stylesheet" href="../css/style2.css" type="text/css" />
    <title>Halaman Administrator</title>
</head>

<body>
    <table width="1047" border="0" align="center" class="table">
        <tr>
            <td height="100" colspan="2" align="center" valign="middle">
                <table width="100%" height="100" border="0" cellpadding="7">
                    <tr>
                        <td align="center" valign="middle">
                            <font color="white" size="7px"> // HALAMAN ADMIN // </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="21%" valign="top">
                <table width="100%" border="0" cellpadding="5">
                    <tr>
                        <td align="center" bgcolor="blue"><strong>
                                <font color="#FFFFFF">MENU</font>
                            </strong></td>
                    </tr>
                    <tr>
                        <td align="left"> <a href="beranda_admin.php">Beranda</a> <br> <a href="data_artikel.php">Kelola
                                Artikel</a><br> <a href="data_gallery.php">Kelola Gallery</a><br> <a
                                href="about.php">About</a><br> <a href="logout.php"
                                onclick="return confirm('Apakah anda yakin ingin keluar?');">Logout</a><br> </td>
                    </tr>
                </table>
            </td>
            <td width="79%" valign="top">
                <table width="100%" border="0" cellpadding="5">
                    <tr>
                        <td>
                            <form action="../admin/proses_editabout.php" method="post">
                                <table width="621" height="163" border="0"> <input type="hidden" name="id"
                                        value="<?php echo $data['id'] ?>" />
                                    <tr>
                                        <td>About</td>
                                        <td><textarea name="about" cols="40" rows="4" class="search-input"
                                                required><?php echo $data['about'] ?></textarea>
                                            <font color="#FF0000">*wajib di isi </font>
                                        </td>
                                    </tr>
                                </table>
                                <p> <input type="submit" class="search-button" name="simpan" value="Simpan" /> </p>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
                <table width="100%" border="0" cellpadding="7">
                    <tr>
                        <td align="center">
                            <p> &copy;
                                <?php echo date('Y') ?> | Created by NamaSendiri
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>