<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Web | Nama_Sendiri</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">

    <link rel="stylesheet" href="./styles/baguetteBox.min.css">
</head>


<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">

        <?php
        // include './components/public/header.php';
        include './components/public/menu.php';
        ?>
        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <section class="bg-white container-fluid p-4 min-vh-80-custom">

                <div style='text-align: justify;' class="tz-gallery d-flex flex-wrap justify-content-center gap-2">
                    <?php
                    //Menyertakan file konfigurasi database 
                    include('koneksi.php');
                    //mengambil gambar dari database 
                    $query = $db->query("SELECT * FROM tbl_gallery ORDER BY id_gallery DESC");
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {

                            $imageThumbURL = './admin/images/upload/' . $row["gambar"];
                            $imageURL = './admin/images/upload/' . $row["gambar"]; ?>
                            <div class="  card shadow rounded  ">

                                <a class="lightbox" href="<?php echo $imageURL; ?>"> <img src="<?php echo $imageThumbURL; ?>"
                                        class="rounded" alt="<?php $row["deskripsi"]; ?>" width="200px" height="200px" /> </a>


                                <span style="max-width: 200px;" class="position-absolute fw-bolder text-truncate shadow start-0 bottom-0 bg-backdrop">
                                    <?php echo $row["deskripsi"]; ?>
                                </span>
                            </div>

                        <?php }
                    } ?>
                </div>
            </section>
            <?php require_once './components/footer.php' ?>
        </main>
    </div>
</body>
<script src="./scripts/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</html>