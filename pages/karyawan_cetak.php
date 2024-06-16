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
                                        <i class="fa-regular fa-user mr-2"></i> Laporan Data Karyawan
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="./karyawan_add.php" onclick="window.print();">
                                        <i class="fa-solid fa-print"></i> Cetak Data Karyawan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                </div>
                <!-- End Page Content -->
            
            </div>
            <!-- Main Content END -->
            <?php include('../partials/footer.php'); ?>