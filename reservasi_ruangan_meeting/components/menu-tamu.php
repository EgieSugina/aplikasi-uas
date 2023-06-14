<?php

$url = $_SERVER['REQUEST_URI'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$url = str_replace($scriptDir, '', $url);
$route = parse_url($url, PHP_URL_PATH);
$route = rtrim(ltrim($route, '/'), '/');

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary container  shadow rounded">
    <div class="container-fluid">
        <!-- <div class="  image-container-2">
            <img src="./../styles/icons/logo-panjang.svg"  alt="Logo Depan">

</div> -->
<div class="logo"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php echo '<a class="nav-link' . ($route === 'home' ? ' active' : '') . '" href="home">List Room</a>'; ?>
                </li>

                <li class="nav-item">
                    <?php echo '<a class="nav-link' . ($route === 'myreservations' ? ' active' : '') . '" href="myreservations">My Reservations</a>'; ?>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="logout">
                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-person-circle"></i>
                        Logout</button>
                </a>
            </span>
        </div>
    </div>
</nav>