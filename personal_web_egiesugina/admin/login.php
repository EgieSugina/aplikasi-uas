<?php session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php"); ?>
<html>

<head>
    <title>Login Administrator</title>
    <link rel="stylesheet" href="../css/login.css" type="text/css" />
    <link rel="shortcut icon" href="../images/p.jpg" />
</head>

<body>
    <form action="cek_login.php" method="post" name="login">
        <table width="260" border="0" align="center" cellpadding="3" class="loginstyle">
            <tr>
                <td colspan="3" align="center"><strong>Login Administrator </strong></td>
            </tr>
            <tr>
                <td width="190" align="right">Username</td>
                <td width="3" align="center">:</td>
                <td width="293"><input name="username" type="text" class="input" required="required" /></td>
            </tr>
            <tr>
                <td align="right">Password</td>
                <td align="center">:</td>
                <td><input name="password" type="password" class="input" required="required" /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td><input name="login" type="submit" class="button" value="Login" /> <input name="cancel" type="reset"
                        class="button" value="Cancel" /> </td>
            </tr>
        </table>
    </form>
    <div class="divstyle">
        <font size="2">
            <?php echo date('Y') ?> - NamaSendiri
        </font>
    </div>
</body>

</html>