<?php include('../koneksi.php'); ?>
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
                            <div style="margin-bottom: 5px; margin-left: 3px;"> [+] <a
                                    href="add_artikel.php"><strong>Tambah</strong></a> </div>
                            <table width="100%" align="center" cellpadding="3" bgcolor="white">
                                <tr bgcolor="blue" align="center" style="font-weight: bold;">
                                    <td>No</td>
                                    <td>Nama Artikel</td>
                                    <td>Isi Artikel</td>
                                    <td>Aksi</td>
                                </tr>
                                <?php include '../koneksi.php';
                                $sql = "select * from tbl_artikel";
                                $query = mysqli_query($db, $sql);
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    echo "<td>" . $data['nama_artikel'] . "</td>";
                                    echo "<td>" . $data['isi_artikel'] . "</td>";
                                    echo "<td><center>";
                                    echo "<a href='edit_artikel.php?id_artikel=" . $data['id_artikel'] . "'>Edit</a> | ";
                                    echo "<a onclick='return hapus()' href='delete_artikel.php?id_artikel=" . $data['id_artikel'] . "'>Hapus</a>";
                                    echo "</center></td>";
                                    echo "</tr>";
                                } ?>
                            </table>
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
<script> function hapus() {var conf = confirm("Apakah data ini ingin dihapus ?"); if (conf == true) {return true;} else {return false;} } </script>

</html>