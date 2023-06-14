<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Web | Egie Sugina</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">

        <?php
        // include './components/public/header.php';
        include './components/public/menu.php';
        ?>

        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <section class="bg-white container-fluid p-4 min-vh-80-custom">
                <div class="row ">
                    <article class="col-9   p-2  ">
                        <div style='text-align: justify;' class="text-truncate">
                            <?php include "koneksi.php";

                            $cari_artikel = (isset($_GET['search'])) ? "WHERE nama_artikel LIKE '%{$_GET['search']}%' OR isi_artikel LIKE '%{$_GET['search']}%'" : '';
                            $sql = "SELECT * FROM tbl_artikel {$cari_artikel} ORDER BY id_artikel desc";
                            $query = mysqli_query($db, $sql);
                            while ($data = mysqli_fetch_array($query)) { ?>
                                <strong>
                                    <font size="4">
                                        <?php echo $data['nama_artikel']; ?>
                                    </font>
                                </strong><br>
                                <?php echo $data['isi_artikel']; ?>
                                <hr color="blue" />
                            <?php } ?>
                        </div>
                    </article>
                    <aside class="col-3   p-2 align-items-center shadow rounded">
                        <h5>Top Artikel </h5>
                        <?php $sql = "select * from tbl_artikel order by id_artikel desc limit 5";
                        $query = mysqli_query($db, $sql);
                        while ($data = mysqli_fetch_array($query)) { ?>

                            <div class="toast show mt-3">
                                <div class="toast-header">
                                    <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                    <strong class="me-auto">
                                        <?php echo $data['nama_artikel']; ?>
                                    </strong>
                                    <!-- <small>11 mins ago</small> -->
                                </div>
                                <div class="toast-body text-truncate">
                                    <?php echo $data['isi_artikel']; ?>
                                </div>
                            </div>


                        <?php } ?>
                    </aside>
                </div>

            </section>
            <?php include './components/footer.php' ?>
        </main>

    </div>
</body>

</html>