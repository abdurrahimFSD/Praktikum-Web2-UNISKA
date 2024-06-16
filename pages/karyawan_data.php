<?php include('../partials/header.php'); ?>
<?php include('../partials/sidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="main-content">
                <?php include('../partials/topbar.php') ?>

                <div class="col-12 mb-4 px-0">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-6">
                                    <h4 class="page-header-title mb-0 text-dark">
                                        <i class="fa-regular fa-user mr-2"></i> Data Karyawan
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="./karyawan_add.php">
                                        <i class="fa-solid fa-user-plus"></i> Tambah Karyawan Baru
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryReadKaryawan = "SELECT * FROM karyawan";
                                        $sqlReadKaryawan = mysqli_query($connection, $queryReadKaryawan) or die ("Query salah : " . mysqli_error($connection));
                                        $no = 1;
                                        while($kolomData = mysqli_fetch_assoc($sqlReadKaryawan)) {
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $kolomData['nik']; ?></td>
                                            <td><?= $kolomData['nama']; ?></td>
                                            <td><?= $kolomData['tempat_lahir']; ?></td>
                                            <td><?= indonesiaTgl($kolomData['tanggal_lahir']); ?></td>
                                            <td><?= $kolomData['alamat']; ?></td>
                                            <td><?= $kolomData['no_telepon']; ?></td>
                                            <td><?= $kolomData['jabatan']; ?></td>
                                            <td><?= $kolomData['status']; ?></td>
                                            <td class="d-flex justify-content-around">
                                                <a href="./karyawan_edit.php" title="Update Data">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="" title="Delete Data">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Page Content -->
            
            </div>
            <!-- Main Content END -->
            <?php include('../partials/footer.php'); ?>