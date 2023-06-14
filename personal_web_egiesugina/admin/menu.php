<nav class="navbar navbar-expand-lg bg-body-tertiary container  shadow rounded">
    <div class="container-fluid">
        <div class="">
            <img src="../images/logo.svg" height="40px" alt="Logo Depan">

        </div>
        <!-- <div class="logo"></div> -->

        <div class="collapse navbar-collapse px-4" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="beranda_admin.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_artikel.php">Kelola Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_gallery.php">Kelola Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

            </ul>
            <span class="navbar-text">
                <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');">
                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-person-circle"></i>
                        Logout</button>
                </a>
            </span>
        </div>

    </div>
</nav>