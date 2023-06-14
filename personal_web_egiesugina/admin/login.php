<!DOCTYPE html>
<html lang="en">

<?php session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php"); ?>

<head>
    <title>Personal Web | Egie Sugina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">

    <link rel="stylesheet" href="../styles/style.css">
</head>
<body class="">
    <div class="login-page bg-light  bg-img-login">
        <div class="bg-backdrop container-fluid h-100 login-page">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="bg-backdrop-login shadow rounded">
                            <div class="row">
                                <div class="col-md-7  ">
                                    <div class="form-left h-100 py-5 px-5 text-white">
                                        <h2>Login </h2>
                                        <form action="cek_login.php" class="row g-4" method="post">
                                            <div class="col-12">
                                                <label>Username<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                    </div>
                                                    <input name="username" type="text" class="form-control"
                                                        required="required" placeholder="Enter Username">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label>Password<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                    <input name="password" type="password" class="form-control"
                                                        required="required" placeholder="Enter Password">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary px-4 float-end mt-4">login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5  d-none d-md-block rounded">
                                    <div class=" bg-subs-img-login h-100 ">
                                        <div
                                            class="form-right h-100  text-primary bg-backdrop image-container rounded w-100 text-center pt-5  ">
                                            <img src="../images/logo_login.svg" alt="Logo Depan" class="shadow rounded">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=" bg-backdrop rounded">
                            <p class="text-end  mt-3 fw-bolder" style="color: #fa4238;">
                                <?php echo date('Y') ?> - D1A220400 - Egie Sugina
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>