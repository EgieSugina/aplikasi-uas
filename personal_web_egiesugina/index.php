<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Web | Egie Sugina</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php
    include './components/public/header.php';
    include './components/public/menu.php';
    ?>

    <main>
        <section>
            <h2></h2>
            <article>
                <div style='text-align: justify;'>
                    <?php include "koneksi.php";
                    $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel desc";
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
        </section>
    </main>
    <aside>
        <h2>List Artikel :</h2>
        <?php $sql = "select * from tbl_artikel order by id_artikel desc";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) { ?>
            &bull;
            <?php echo $data['nama_artikel']; ?> <br>
        <?php } ?>
    </aside>
    <?php include './components/footer.php' ?>

</body>

</html>