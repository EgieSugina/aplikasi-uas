<!DOCTYPE html>
<html lang="en">

<?php include './components/head-tamu.php' ?>

<body class="bg-img-tamu  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php include './components/menu-tamu.php' ?>
        <main class="mt-3 container shadow rounded   px-0 pt-2 " style="background-color: #fa4238;">
            <div class="bg-white container-fluid p-4">
               

                <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" class="btn btn-outline-success active">All</button>
                    <button type="button" class="btn btn-outline-success">Open</button>
                    <button type="button" class="btn btn-outline-success">Booked</button>
                </div>
                <?php
                $data = [];

                for ($i = 0; $i < 4; $i++) {
                    $nama_ruangan = 'Ruangan ' . chr(65 + $i);
                    $ukuran_ruangan = ($i % 3 == 0) ? 'L' : (($i % 3 == 1) ? 'M' : 'S');
                    $detail_tambahan = ($i % 4 == 0) ? 'Ruangan yang nyaman' : (($i % 4 == 1) ? 'Ruangan dengan pemandangan indah' : 'Ruangan dengan fasilitas lengkap');
                    $fasilitas = ($i % 2 == 0) ? ['Proyektor', 'Whiteboard'] : ['Proyektor', 'Televisi'];
                    $ketersediaan = ($i % 3 == 0) ? 'Tidak Tersedia' : 'Tersedia';
                    $gambar = ($i + 1) . '.jpeg';

                    $data[] = [
                        'nama_ruangan' => $nama_ruangan,
                        'ukuran_ruangan' => $ukuran_ruangan,
                        'detail_tambahan' => $detail_tambahan,
                        'fasilitas' => $fasilitas,
                        'ketersediaan' => $ketersediaan,
                        'gambar' => $gambar
                    ];
                }

                ?>

                <div class="d-flex align-content-start flex-wrap gap-2 mt-3">
                    <?php foreach ($data as $ruangan) { ?>
                        <div class="card" style="width: 18rem;">

                            <img src="<?php $url = $_SERVER['REQUEST_URI'];
                            $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
                            echo $scriptDir . '/images/' . $ruangan['gambar']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $ruangan['nama_ruangan']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $ruangan['detail_tambahan']; ?>
                                </p>
                                <p class="card-text">
                                <ul>
                                <?php foreach ($ruangan['fasilitas'] as $i) { ?>
                                    <li><?php echo $i;?></li>
                                <?php } ?>
                                    
                                </ul>
                               
                                </p>
                                <?php
                                if ($ruangan['ketersediaan'] === 'Tersedia') { ?>
                                    <a href="#" class="btn btn-sm btn-primary">Booking Room</a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-sm btn-danger disabled">Booked</a>

                                <?php } ?>




                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <p class="fw-bolder text-center text-white">D1A220400 - Egie Sugina</p>

        </main>
    </div>
</body>


</html>