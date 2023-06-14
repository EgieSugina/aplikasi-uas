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

                    <section class="col-9">
                        <h2>Form Input Data</h2>
                        <article>
                            <div class="form1">
                                <form action="./proses/proses_input.php" method="post">
                                    <div class="col-md-6">
                                        <label class="form-label" for="nama">Nama</label>
                                        <input class="form-control" type="text" name="nama"
                                            placeholder="Nama Lengkap" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="jk">Jenis Kelamin</label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                                            <label class="form-check-label">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" value="Perempuan"
                                                checked>
                                            <label class="form-check-label">
                                                Perempuan
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="agama">Agama</label>
                                        <select class="form-select" name="agama">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Atheis</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control"
                                            placeholder="Asal Sekolah" />
                                    </div>
                                    <div class="col-md-2 mt-3 ">
                                        <button type="submit" value="Simpan" name="simpan"
                                            class="btn btn-primary w-100 fw-bold"><i class="bi bi-send-plus"></i>
                                            Simpan</button>
                                    </div>
                                </form>
                            </div>

                        </article>
                    </section>
                    <aside class="col-3">
                        <?php if (isset($_GET['status'])): ?>
                            <div
                                class="<?php echo $_GET['status'] === 'sukses' ? 'bg-success' : ' bg-danger'; ?> toast fade   show  ">
                                <div class="toast-header ">
                                    <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                    <strong class="me-auto">Notifikasi</strong>
                                    <small> </small>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> -->
                                </div>
                                <div class="toast-body">
                                    <?php
                                    if ($_GET['status'] == 'sukses') {
                                        echo "Berhasil Simpan Data!";

                                    } else {
                                        echo "Data gagal disimpan!";

                                    }
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>




                    </aside>
                </div>
            </div>
            <?php include './component/footer.php'; ?>
        </main>

    </div>

</body>

</html>