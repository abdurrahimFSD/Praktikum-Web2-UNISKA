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
                                    <a class="btn btn-light text-primary" onclick="printTable()">
                                        <i class="fa-solid fa-print"></i> Cetak Data Karyawan
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- End Page Content -->

                <script>
                function printTable() {
                    var tableContent = document.getElementById('dataTable').outerHTML;
                    var printWindow = window.open('', '', 'height=842,width=595'); // Ukuran A4 dalam piksel: 595x842 untuk portrait, 842x595 untuk landscape
                    printWindow.document.write('<style>');
                    printWindow.document.write('@media print {');
                    printWindow.document.write('@page { size: A4; margin: 20mm; }');
                    printWindow.document.write('body { -webkit-print-color-adjust: exact; text-align: center; }'); // Menjaga warna dan teks di tengah
                    printWindow.document.write('.print-title { font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; }'); // Gaya untuk judul
                    printWindow.document.write('}');
                    printWindow.document.write('</style>');
                    printWindow.document.write('<link rel="stylesheet" href="../assets/css/style.min.css">'); // Sesuaikan path ke file CSS
                    printWindow.document.write('</head><body>');
                    printWindow.document.write('<div class="print-title">Laporan Data Karyawan</div>');
                    printWindow.document.write(tableContent);
                    printWindow.document.write('</body></html>');
                    printWindow.document.close();
                    printWindow.print();
                }
                </script>
            
            </div>
            <!-- Main Content END -->
            <?php include('../partials/footer.php'); ?>