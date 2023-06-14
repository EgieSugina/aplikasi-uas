<?php require_once('../koneksi.php'); ?>
<html>

<head>
    <link rel="shortcut icon" href="../images/p.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Halaman Administrator</title>
</head>

<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php

        include './menu.php';
        ?>
        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <section class="bg-white container-fluid p-4 min-vh-80-custom">
                <div class="mt-3">
                    <div class="col-3">
                        <a href="./add_artikel.php"><button class="btn btn-info btn-sm"><i
                                    class="bi bi-plus-square"></i>
                                Tambah</button></a>
                    </div>
                    <div class="max-height-80vh scroll  mt-3">
                        <table class="table overflow-scroll  max-vh-80-custom">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Artikel</th>
                                    <th scope="col" style=" max-width: 70%">Isi Artikel</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require_once '../koneksi.php';
                                $sql = "select * from tbl_artikel";

                                $query = mysqli_query($db, $sql);
                                foreach ($query as $index => $item): ?>
                                    <tr>
                                        <td>
                                            <?php echo $index + 1; ?>
                                        </td>

                                        <td class=" text-truncate">
                                            <?php echo $item['nama_artikel']; ?>
                                        </td>
                                        <td class=" text-truncate" style=" max-width: 40vw">
                                            <?php echo $item['isi_artikel']; ?>
                                        </td>

                                        <td class="text-end">
                                            <a href='edit_artikel.php?id_artikel=<?php echo $item['id_artikel']; ?>'>
                                                <button class="btn btn-success btn-xs"><i class="bi bi-pencil"></i>
                                                    Edit</button></a>
                                            <a onclick='return confirm("Apakah data ini ingin dihapus ?");'
                                                href='delete_artikel.php?id_artikel=<?php echo $item['id_artikel']; ?>'>
                                                <button class="btn btn-danger btn-xs"><i class="bi bi-trash"></i>
                                                    Delete</button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </section>
            <?php require_once './footer.php' ?>

        </main>
    </div>
</body>


</html>