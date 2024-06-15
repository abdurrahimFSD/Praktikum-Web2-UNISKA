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
                                        <i class="fa-solid fa-user-plus mr-2"></i> Tambah Karyawan
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
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3 row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" maxlength="16" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
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