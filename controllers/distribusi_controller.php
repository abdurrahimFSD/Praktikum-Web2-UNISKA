<?php
if(isset($_GET['nik'])) {
    $nik = $_GET['nik'];
    $querySelectKaryawanGudang = "SELECT * FROM karyawan_gudang WHERE nik='$nik'";
    $resultSelectKaryawanGudang = mysqli_query($connection, $querySelectKaryawanGudang);
    if(mysqli_num_rows($resultSelectKaryawanGudang) >= 1) {
        $_SESSION['karyawanSudahTerdistribusi'] = $nik;
    }
}

if(isset($_POST['tambahDistribusi'])) {
    $nik = $_POST['nik'];
    $idGudang = $_POST['idGudang'];

    $queryAddDistribusi = "INSERT INTO karyawan_gudang(nik, id_gudang) VALUES ('$nik','$idGudang')";
    $resultAddDistribusi = mysqli_query($connection, $queryAddDistribusi);

    if($resultAddDistribusi) {
        $_SESSION['doneAddDistribusi'] = $nik;
    }
}
?>