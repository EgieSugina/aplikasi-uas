 

<nav class="navbar navbar-expand-lg bg-body-tertiary container  shadow rounded">
    <div class="container-fluid">
        <div class="">
            <img src="./images/logo.svg" height="40px" alt="Logo Depan">

        </div>
        <!-- <div class="logo"></div> -->

        <div class="collapse navbar-collapse px-4" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/login.php">Login</a>
                </li>
            </ul>

        </div>
        <form action='index.php' method="GET">
            <div class="input-group input-group-sm rounded shadow">
                <input type='text' class="form-control" value='' name='search' placeholder="Cari Artikel">
                <button type="submit" class="btn  btn-outline-primary" value='Cari'><i class="bi bi-search"></i>
                    Cari</button>
            </div>
        </form>
    </div>
</nav>