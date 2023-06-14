<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Web | Nama_Sendiri</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </script>
</head>

<body>

    <?php
    include './components/public/header.php';
    include './components/public/menu.php';
    ?>

    <div style='text-align: justify;'>
        <?php
        //Menyertakan file konfigurasi database 
        include('koneksi.php');
        //mengambil gambar dari database 
        $query = $db->query("SELECT * FROM tbl_gallery ORDER BY id_gallery DESC");
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $imageThumbURL = './images/' . $row["gambar"];
                $imageURL = './images/' . $row["gambar"]; ?>
                <a href="<?php echo $imageURL; ?>"> <img src="<?php echo $imageThumbURL; ?>" alt="" width="185px"
                        height="185px" /> </a>
            <?php }
        } ?>
    </div>
    <?php include './components/footer.php' ?>
</body>

</html>