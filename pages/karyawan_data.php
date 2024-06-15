<?php include('../partials/header.php'); ?>
<?php include('../partials/sidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="main-content">
                <?php include('../partials/topbar.php') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h2 class="text-dark">Data Karyawan</h2>
                    <hr>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="./karyawan_add.php" class="btn btn-success ">
                                <i class="fa-solid fa-plus mr-1"></i> Create Data
                            </a>
                        </div>
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
                                        <tr>
                                            <td>1</td>
                                            <td>11001</td>
                                            <td>Haaland</td>
                                            <td>Norway</td>
                                            <td>2011/04/25</td>
                                            <td>Norway City</td>
                                            <td>081347200001</td>
                                            <td>Manajer</td>
                                            <td>Tetap</td>
                                            <td class="d-flex justify-content-around">
                                                <a href="" title="Update Data">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="" title="Delete Data">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
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