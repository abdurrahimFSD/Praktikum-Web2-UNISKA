<?php
include('../includes/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nik = $_GET['nik'];
    $querySelectKaryawanGudang = "SELECT * FROM karyawan_gudang WHERE nik='$nik'";
    $resultSelectKaryawanGudang = mysqli_query($connection, $querySelectKaryawanGudang);
    if (mysqli_num_rows($resultSelectKaryawanGudang) >= 1) {
        echo "<script>
            window.onload = function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: 'Karyawan Dengan NIK $nik Sudah Pernah Didistribusikan',
                    showConfirmButton: true
                });
            };
            </script>";
    }
    $kolomData = mysqli_fetch_assoc($resultSelectKaryawanGudang);
    $query = "SELECT karyawan.* FROM karyawan WHERE nik=$nik";
    $result = mysqli_query($connection, $query);
    $dataKaryawan = mysqli_fetch_assoc($result);
}

if (isset($_POST['tambahDistribusi'])) {
    $nik = $_POST['nik'];
    $idGudang = $_POST['idGudang'];

    $queryTambahDistribusi = "INSERT INTO karyawan_gudang(nik, id_gudang) VALUES ('$nik','$idGudang')";
    $resultTambahDistribusi = mysqli_query($connection, $queryTambahDistribusi);

    if ($resultTambahDistribusi) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Ditambahkan',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location.href = 'distribusi_data.php';
            });
            </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Data Gagal Ditambahkan',
                showConfirmButton: true
            });
            </script>";
    }
}
?>
