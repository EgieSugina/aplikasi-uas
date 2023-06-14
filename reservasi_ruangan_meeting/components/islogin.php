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
} else {
    header("Location: login");
    exit();
}
?>