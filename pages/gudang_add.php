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
                                        <i class="fa-solid fa-square-plus mr-2"></i> Tambah Gudang
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="./gudang_data.php">
                                        <i class="fa-solid fa-arrow-left"></i> Kembali Ke Data Gudang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                    <label for="namaGudang" class="col-sm-2 col-form-label">Nama Gudang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namaGudang" name="namaGudang" placeholder="Masukkan Nama Gudang" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="lokasiGudang" class="col-sm-2 col-form-label">Lokasi Gudang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lokasiGudang" name="lokasiGudang" placeholder="Masukkan Lokasi Gudang" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="luasGudang" class="col-sm-2 col-form-label">Luas Gudang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="luasGudang" name="luasGudang" placeholder="Masukkan Luas Gudang" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="tambahGudang">
                                            Tambah Gudang
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