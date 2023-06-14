<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php'; ?>

<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php
        // include './component/header.php';
        include './component/navigation.php';
        ?>
        <main class="mt-3 container shadow rounded   px-0 pt-2 " style="background-color: #fa4238;">
            <div class="bg-white container-fluid p-4 ">
                <div class="row">


                    <section class="col-8">
                        <h2>Data Mahasiswa</h2>
                        <article>
                            <form action='index.php' method="POST">
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type='text' class="form-control" value='' name='qcari'>
                                        <button type="submit" class="btn  btn-outline-primary" value='Cari'><i
                                                class="bi bi-search"></i> Cari</button>
                                        <button type="submit" class="btn  btn-outline-info" href='index.php'>
                                            Tampilkan Semua Data</button>

                                        <!-- <a href='index.php' class="btn btn-outline-secondary">Tampilkan Semua Data</a> -->

                                    </div>
                                    <!-- <a href='index.php'>Tampilkan Semua Data</a>
                                    <br> -->
                                    <small class="text-danger">*Pencarian berdasarkan Nama dan Agama</small>
                                </div>

                            </form>
                            <br>
                            <table class="table">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Sekolah Asal</th>
                                    <th scope="col">Tindakan</th>
                                </tr>
                                <?php
                                include('proses/koneksi.php');
                                $sql = "SELECT * FROM tbl_mahasiswa ";
                                if (isset($_POST['qcari'])) {
                                    $qcari = $_POST['qcari'];
                                    $sql = "SELECT * FROM tbl_mahasiswa 
                     where nama like '%$qcari%'
                     or agama like '%$qcari%' ";
                                }
                                $query = mysqli_query($db, $sql);
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $data['nama'] . "</td>";
                                    echo "<td>" . $data['alamat'] . "</td>";
                                    echo "<td>" . $data['jk'] . "</td>";
                                    echo "<td>" . $data['agama'] . "</td>";
                                    echo "<td>" . $data['asal_sekolah'] . "</td>";

                                    echo "<td>";


                                    echo "<a href='edit_data.php?id=" . $data['id'] . "'><button class='btn btn-success btn-xs'><i class='bi bi-pencil'></i> Edit</button></a> ";
                                    echo "<a href='./proses/delete_data.php?id=" . $data['id'] . "'><button class='btn btn-danger btn-xs'><i class='bi bi-trash'></i> Delete</button></a>";
                                    echo "</td>";

                                    echo "</tr>";
                                    $no++;
                                }
                                ?>
                            </table>
                        </article>
                    </section>
                    <aside class="col-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Jumlah Data</p>
                                        <p>Jumlah data sebanyak :
                                            <?php echo mysqli_num_rows($query) ?> Orang
                                        </p>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="   rounded-circle bg-success">
                                            <span class="fs-1 p-2 text-white">
                                                <i class="bi bi-people"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
            <?php include './component/footer.php'; ?>
        </main>

    </div>
</body>

</html>