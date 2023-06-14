<!DOCTYPE html>
<html lang="en">

<?php include './components/head-admin.php' ?>

<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php include './components/menu-admin.php' ?>
        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <div class="bg-white container-fluid p-4">
                <?php include './views/admin/form-ruangan.php' ?>
                <?php
                $data = [
                    [
                        'nama_ruangan' => 'Ruangan A',
                        'ukuran_ruangan' => 'L',
                        'detail_tambahan' => 'Ruangan dengan pemandangan indah',
                        'fasilitas' => ['Proyektor', 'Whiteboard'],
                        'ketersediaan' => 'Tersedia',
                        'gambar' => 'bg-login.jpg'
                    ],
                    [
                        'nama_ruangan' => 'Ruangan B',
                        'ukuran_ruangan' => 'M',
                        'detail_tambahan' => 'Ruangan yang nyaman',
                        'fasilitas' => ['Proyektor', 'Televisi'],
                        'ketersediaan' => 'Tersedia',
                        'gambar' => 'bg-login.jpg'
                    ],
                ];
                ?>
                <div class="mt-3">
                    <div class="col-3">
                        <label class="form-label">Search</label>
                        <input type="text" class="  form-control" placeholder="Search NIK">
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Ukuran Ruangan</th>
                                <th scope="col">Detail Tambahan</th>
                                <th scope="col">Fasilitas</th>
                                <th scope="col">Ketersediaan</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $index => $item): ?>
                                <tr>
                                    <td>
                                        <?php echo $index + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['nama_ruangan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['ukuran_ruangan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['detail_tambahan']; ?>
                                    </td>
                                    <td>
                                        <?php foreach ($item['fasilitas'] as $index => $fasilitas):
                                            echo '<span class="badge bg-secondary">' . $fasilitas . '</span>';
                                        endforeach;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $item['ketersediaan']; ?>
                                    </td>

                                    <td>
                                        <?php
                                        $url = $_SERVER['REQUEST_URI'];
                                        $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
                                        echo '<a href="' . $scriptDir .'/images/'. $item['gambar'] . '" >Images</>';
                                        ?>
                                    </td>
                                    <td class="text-end">


                                        <button class="btn btn-success btn-xs"><i class="bi bi-pencil"></i> Edit</button>
                                        <button class="btn btn-danger btn-xs"><i class="bi bi-trash"></i> Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <p class="fw-bolder text-center text-white">D1A220400 - Egie Sugina</p>
        </main>
    </div>
</body>


</html>