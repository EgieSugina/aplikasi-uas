<!DOCTYPE html>
<html lang="en">

<?php include './components/head-admin.php' ?>

<body class="bg-img-admin  ">
    <div class="bg-backdrop-admin container-fluid h-screen p-3">
        <?php include './components/menu-admin.php' ?>
        <main class="mt-3 container shadow rounded bg-danger px-0 pt-2 ">
            <div class="bg-white container-fluid p-4">
                <?php include './views/admin/form.php' ?>
                <?php
                $data = [
                    [
                        'NIK' => 'tamu',
                        'No Telpon' => '081234567890',
                        'Nama Perusahaan' => 'Perusahaan A',
                        'Jabatan' => 'Manajer',
                        'Email' => 'manajer@perusahaanA.com',
                        'Password' => 'tamu',
                        'have_request' => true,

                    ],
                    [
                        'NIK' => '0987654321',
                        'No Telpon' => '089876543210',
                        'Nama Perusahaan' => 'Perusahaan B',
                        'Jabatan' => 'Karyawan',
                        'Email' => 'karyawan@perusahaanB.com',
                        'Password' => 'password456',
                        'have_request' => false,
                    ],
                    [
                        'NIK' => '0987654321',
                        'No Telpon' => '089876543210',
                        'Nama Perusahaan' => 'Perusahaan B',
                        'Jabatan' => 'Karyawan',
                        'Email' => 'karyawan@perusahaanB.com',
                        'Password' => 'password456',
                        'have_request' => false,
                    ],
                    [
                        'NIK' => '0987654321',
                        'No Telpon' => '089876543210',
                        'Nama Perusahaan' => 'Perusahaan B',
                        'Jabatan' => 'Karyawan',
                        'Email' => 'karyawan@perusahaanB.com',
                        'Password' => 'password456',
                        'have_request' => false,
                    ],
                    [
                        'NIK' => '0987654321',
                        'No Telpon' => '089876543210',
                        'Nama Perusahaan' => 'Perusahaan B',
                        'Jabatan' => 'Karyawan',
                        'Email' => 'karyawan@perusahaanB.com',
                        'Password' => 'password456',
                        'have_request' => true,
                    ],
                    [
                        'NIK' => '0987654321',
                        'No Telpon' => '089876543210',
                        'Nama Perusahaan' => 'Perusahaan B',
                        'Jabatan' => 'Karyawan',
                        'Email' => 'karyawan@perusahaanB.com',
                        'Password' => 'password456',
                        'have_request' => false,
                    ],
                    [
                        'NIK' => '0987654321',
                        'No Telpon' => '089876543210',
                        'Nama Perusahaan' => 'Perusahaan B',
                        'Jabatan' => 'Karyawan',
                        'Email' => 'karyawan@perusahaanB.com',
                        'Password' => 'password456',
                        'have_request' => true,
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
                                <th scope="col">NIK (Nomor Tamu/Karyawan)</th>
                                <th scope="col">No Telpon</th>
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
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
                                        <?php echo $item['NIK']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['No Telpon']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['Nama Perusahaan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['Jabatan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['Email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['Password']; ?>
                                    </td>
                                    <td class="text-end">
                                        <?php if ($item['have_request'] === true) { ?>

                                            <button class="btn btn-warning btn-xs"><i class="bi bi-envelope-fill"></i></i>
                                                Accept</button>
                                        <?php } else {
                                            if (($index % 3 == 0)) {
                                                ?>
                                                <button class="btn btn-success  btn-xs"><i class="bi bi-check2-square"></i></i>
                                                    Done</button>

                                            <?php }
                                        }
                                        ; ?>
                                        <button class="btn btn-info btn-xs"><i class="bi bi-box-arrow-in-right"></i></i>
                                            Assign</button>

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