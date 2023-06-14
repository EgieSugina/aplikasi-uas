<?php
session_start();
if (isset($_SESSION['nik'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: login");
    exit();
} else {
    echo 'You are already logged out.';
    header("Location: login");
}
?>