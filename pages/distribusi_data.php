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
                                        <i class="fa-solid fa-users mr-2"></i> Distribusi Karyawan
                                    </h4>
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex justify-content-end">
                                    <a class="btn btn-light text-primary" href="">
                                        <i class="fa-solid fa-square-plus"></i> Tambah Data
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
                                            <th>Luas Gudang </th>
                                            <th>Jumlah Karyawan</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query = "SELECT karyawan_gudang.*, gudang.nama_gudang, gudang.lokasi_gudang, gudang.luas_gudang, COUNT(karyawan_gudang.nik) AS jumlah_karyawan FROM karyawan_gudang
                                    LEFT JOIN gudang ON gudang.id_gudang=karyawan_gudang.id_gudang
                                    LEFT JOIN karyawan ON karyawan.nik=karyawan_gudang.nik
                                    GROUP BY gudang.id_gudang
                                    ORDER BY jumlah_karyawan DESC";
                                    $result = mysqli_query($connection, $query) or die ("Query salah : ".mysqli_error($connection));
                                    $no = 1;
                                    while ($kolomData = mysqli_fetch_array($result) ) {
                                    ?>
                                        
                                        <tr>
                                            <td>
                                                <?= $no++; ?>
                                            </td>
                                            <td>
                                                <?= $kolomData['nama_gudang']; ?>
                                            </td>
                                            <td>
                                                <?= $kolomData['luas_gudang']; ?>m<sup>2</sup>
                                            </td>
                                            <td>
                                                <?= $kolomData['jumlah_karyawan']; ?>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="./distribusi_detail.php?id=<?= $kolomData['id_gudang']; ?>" title="Detail Data" class="">
                                                    <i class="fas fa-search-plus fa-xl"></i>
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