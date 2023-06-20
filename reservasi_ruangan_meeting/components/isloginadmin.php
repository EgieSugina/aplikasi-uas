<?php
session_start();

if (!isset($_SESSION['nik'])) {
    // User is not logged in, redirect to login page
    if ($_SESSION['nik'] === "tamu") {
        header("Location: index.php/home");
        exit();
    }
    header("Location: index.php/login");
    exit();
} else {
    header("Location: index.php/login");
    exit();
}
?>