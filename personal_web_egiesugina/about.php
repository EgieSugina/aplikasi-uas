<html>

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

    <main>
        <section>
            <article>
                <h3>
                    <?php include('koneksi.php');
                    $sql = "select * from tbl_about";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_array($query);
                    if (isset($data)) {
                        # code...
                        echo $data["about"];
                    }
                    ?>
                </h3>
                </div>
            </article>
        </section>
    </main>
    <?php include './components/footer.php' ?>
</body>

</html>