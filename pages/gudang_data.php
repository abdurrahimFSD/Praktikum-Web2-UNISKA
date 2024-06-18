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
                                        <i class="fa-solid fa-warehouse mr-2"></i> Data Gudang
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="./gudang_add.php">
                                        <i class="fa-solid fa-square-plus"></i> Tambah Gudang Baru
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
                                            <th>Nama Gudang</th>
                                            <th>Lokasi Gudang</th>
                                            <th>Luas Gudang </th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryReadGudang = "SELECT * FROM gudang";
                                        $resultReadGudang = mysqli_query($connection, $queryReadGudang);
                                        $no = 1;
                                        while($kolomData = mysqli_fetch_assoc($resultReadGudang)) {
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $kolomData['nama_gudang']; ?></td>
                                            <td><?= $kolomData['lokasi_gudang']; ?></td>
                                            <td><?= $kolomData['luas_gudang']; ?>m<sup>2</sup></td>
                                            <td class="d-flex justify-content-around">
                                                <a href="./gudang_edit.php" title="Update Data">
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