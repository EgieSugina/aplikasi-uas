<?php
session_start();
if (isset($_SESSION['nik'])) {
    if ($_SESSION['nik'] === "admin") {
        header("Location: index.php/admin/home");
        exit();
    }
    if ($_SESSION['nik'] === "tamu") {
        header("Location: index.php/home");
        exit();
    }
} else {
    header("Location: index.php/login");
    exit();
}
?>