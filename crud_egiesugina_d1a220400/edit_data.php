<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php'; ?>


<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php
        include "./proses/koneksi.php";
        include './proses/get_data_edit.php';
        // include './component/header.php';
        include './component/navigation.php';
        ?>
        <main class="mt-3 container shadow rounded   px-0 pt-2 " style="background-color: #fa4238;">
            <div class="bg-white container-fluid p-4 ">
                <div class="row">
                    <section class="col-9">
                        <h2>Form Edit Data</h2>
                        <article>
                            <div class="form1">
                                <form action="./proses/proses_edit.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                                    <div class="col-md-6">
                                        <label class="form-label" for="nama">Nama</label>
                                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap"
                                            value="<?php echo $data['nama'] ?>" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <textarea class="form-control"
                                            name="alamat"><?php echo $data['alamat'] ?></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="jk">Jenis Kelamin</label>
                                        <?php $jkel = $data['jk']; ?>
                                        <div class="form-check">
                                            <input type="radio" name="jk" value="Laki-laki" <?php echo ($jkel == 'Laki-laki') ? "checked" : "" ?>>
                                            <label class="form-check-label">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="jk" value="Perempuan" <?php echo ($jkel == 'Perempuan') ? "checked" : "" ?>>
                                            <label class="form-check-label">
                                                Perempuan
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="agama">Agama</label>
                                        <?php $agama = $data['agama']; ?>
                                        <select class="form-select" name="agama">
                                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                                            <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                            <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                                            <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                                            <option <?php echo ($agama == 'Lainnya') ? "selected" : "" ?>>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="asal_sekolah">Asal Sekolah</label>
                                        <input class="form-control" type="text" name="asal_sekolah"
                                            placeholder="nama sekolah" value="<?php echo $data['asal_sekolah'] ?>" />
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <button type="submit" value="Simpan" name="simpan"
                                            class="btn btn-primary w-100 fw-bold"><i class="bi bi-send-plus"></i>
                                            Simpan</button>
                                    </div>
                                </form>
                        </article>
                    </section>

                </div>
            </div>


            <?php include './component/footer.php'; ?>
        </main>
    </div>

</body>

</html>