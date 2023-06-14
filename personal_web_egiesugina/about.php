<html>

<head>
    <title>Personal Web | Nama_Sendiri</title>
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
                <article>
                    <h3>
                        <?php require_once('koneksi.php');
                        $sql = "select * from tbl_about";
                        $query = mysqli_query($db, $sql);
                        $data = mysqli_fetch_array($query);

                        if (isset($data)) {
                            $replacement = '/admin';
                            $result = str_replace('/images/upload/', $replacement . '/images/upload/', $data['about']);
                            echo $result;
                        }
                        ?>
                    </h3>

                </article>
            </section>
            <?php require_once './components/footer.php' ?>
        </main>
    </div>
</body>

</html>