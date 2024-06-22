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
                                    <i class="fa-solid fa-people-carry-box"></i> Distribusi Gudang
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="./distribusi_karyawan.php">
                                        <i class="fa-solid fa-arrow-left"></i> Kembali Ke Distribusi Karyawan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include('../controllers/distribusi_controller.php'); ?>
                <?php include('../includes/alert_distribusi.php');?>
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Gudang</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3 row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $nik; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <?php
                                    $queryKaryawan = "SELECT karyawan.* FROM karyawan WHERE nik= '$nik'";
                                    $resultKaryawan = mysqli_query($connection, $queryKaryawan);
                                    $dataKaryawan = mysqli_fetch_assoc($resultKaryawan);
                                    ?>
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $dataKaryawan['nama']; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="idGudang" class="col-sm-2 col-form-label">Pilih Gudang</label>
                                    <div class="col-sm-10">
                                    <select name="idGudang" id="idGudang" class="form-control">
                                        <?php
                                        $queryGudang = "SELECT gudang.* FROM gudang";
                                        $resultGudang = mysqli_query($connection, $queryGudang);
                                        while ($list = mysqli_fetch_array($resultGudang)) {
                                            echo "<option value='{$list['id_gudang']}'> {$list['nama_gudang']} </option>";
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="tambahDistribusi">
                                            Tambah Distribusi
                                        </button>
                                        <button type="reset" class="btn btn-warning">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                </div>
                <!-- End Page Content -->

            </div>
            <!-- Main Content END -->
            <?php include('../partials/footer.php'); ?>