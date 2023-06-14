<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['nik'])) {
    if ($_SESSION['nik'] === "admin") {
        header("Location: admin/home");
        exit();
    }
    if ($_SESSION['nik'] === "tamu") {
        header("Location: home");
        exit();
    }

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST["nik"];
    $password = $_POST["password"];
    if ($nik === "admin" && $password === "admin") {
        $_SESSION['nik'] = $nik;

        header("Location: admin/home");
        exit();
    } else if ($nik === "tamu" && $password === "tamu") {
        $_SESSION['nik'] = $nik;

        header("Location: home");
        exit();
    } else {
        echo "Invalid nik or password";
    }
}
?>
<?php include './components/head.php' ?>

<body class="">
    <div class="login-page bg-light  bg-img-login">
        <div class="bg-backdrop container-fluid h-100 login-page">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="bg-white shadow rounded">
                            <div class="row">
                                <div class="col-md-7  ">
                                    <div class="form-left h-100 py-5 px-5">
                                        <form action="login" class="row g-4" method="post">
                                            <div class="col-12">
                                                <label>NIK<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                    </div>
                                                    <input name="nik" type="text" class="form-control"
                                                        placeholder="Enter NIK">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label>Password<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                    <input name="password" type="password" class="form-control"
                                                        placeholder="Enter Password">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="inlineFormCheck">
                                                    <label class="form-check-label" for="inlineFormCheck">Remember
                                                        me</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <a href="#" class="float-end text-primary">Forgot Password?</a>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary px-4 float-end mt-4">login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5  d-none d-md-block">
                                    <div class=" bg-subs-img-login h-100 ">
                                        <div
                                            class="form-right h-100  text-primary bg-backdrop image-container  w-100 text-center pt-5  ">
                                            <img src="./styles/icons/logo-bulat.svg" alt="Logo Depan" class="shadow">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=" bg-backdrop">
                            <p class="text-end  mt-3 fw-bolder" style="color: #fa4238;">D1A220400 - Egie Sugina</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>