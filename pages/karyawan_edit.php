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
                                        <i class="fa-regular fa-user mr-2"></i> Edit Karyawan
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="./karyawan_data.php">
                                        <i class="fa-solid fa-arrow-left"></i> Kembali Ke Data Karyawan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // Update
                if(isset($_GET['nik'])) {
                    global $connection;

                    $nik = $_GET['nik'];

                    // Query select karyawan berdasarkan nik
                    $querySelectKaryawan = "SELECT * FROM karyawan WHERE nik = '$nik'";
                    $resultSelectKaryawan = mysqli_query($connection, $querySelectKaryawan);

                    $kolomData = mysqli_fetch_assoc($resultSelectKaryawan);

                    $nik = $kolomData['nik'];
                    $nama = $kolomData['nama'];
                    $tempatLahir = $kolomData['tempat_lahir'];
                    $tanggalLahir = $kolomData['tanggal_lahir'];
                    $alamat = $kolomData['alamat'];
                    $noTelepon = $kolomData['no_telepon'];
                    $jabatan = $kolomData['jabatan'];
                    $status = $kolomData['status'];
                }
                // Update
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Form card -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3 row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" maxlength="16" value="<?= $nik; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $nama; ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir" value="<?= $tempatLahir; ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir" value="<?= $tanggalLahir; ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"><?= $alamat; ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="noTelepon" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="noTelepon" name="noTelepon" placeholder="Masukkan No Telepon" maxlength="13" value="<?= $noTelepon; ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-control" id="jabatan" aria-label="Default select example">
                                            <option selected>Pilih Jabatan</option>
                                            <option value="Operator" <?= ($jabatan == 'Operator') ? 'selected' : '' ?> >Operator</option>
                                            <option value="Leader" <?= ($jabatan == 'Leader') ? 'selected' : '' ?> >Leader</option>
                                            <option value="Supervisor" <?= ($jabatan == 'Supervisor') ? 'selected' : '' ?> >Supervisor</option>
                                            <option value="Manager" <?= ($jabatan == 'Manager') ? 'selected' : '' ?> >Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-control" id="status" aria-label="Default select example">
                                            <option selected>Pilih Status</option>
                                            <option value="Outsourcing" <?= ($status == 'Outsourcing') ? 'selected' : '' ?> >Outsourcing</option>
                                            <option value="Kontrak" <?= ($status == 'Kontrak') ? 'selected' : '' ?> >Kontrak</option>
                                            <option value="Tetap" <?= ($status == 'Tetap') ? 'selected' : '' ?> >Tetap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="editKaryawan">
                                            Perbarui
                                        </button>
                                        <button type="reset" class="btn btn-warning">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form card -->
                    
                </div>
                <!-- End Page Content -->
            
            </div>
            <!-- Main Content END -->
            <?php include('../partials/footer.php'); ?>