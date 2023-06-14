<?php
session_start();

if (!isset($_SESSION['nik'])) {
    // User is not logged in, redirect to login page
    if ($_SESSION['nik'] === "tamu") {
        header("Location: home");
        exit();
    }
    header("Location: login");
    exit();
} else {
    header("Location: login");
    exit();
}
?>