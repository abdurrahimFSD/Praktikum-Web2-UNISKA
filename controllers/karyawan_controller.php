<?php

include '../includes/connection.php';
include '../includes/library.php';
session_start();

class KaryawanController {
    // Tambah Karyawan
    public function tambahKaryawan($nik, $nama, $tempatLahir, $tanggalLahir, $alamat, $noTelepon, $jabatan, $status) {
        // Mengakses koneksi database yang telah dibuat di file connection.php
        global $connection;

        // Cek apakah NIK sudah ada
        $queryCekNik = "SELECT * FROM karyawan WHERE nik = '$nik'";
        $sqlCekNik = mysqli_query($connection, $queryCekNik);

        if(mysqli_num_rows($sqlCekNik) > 0) {
            // Jika NIK sudah ada maka redirect ke halaman karyawan_add.php 
            $_SESSION['nikSudahAda'] = $nik;
            header("location: ../pages/karyawan_add.php");
            exit;
        }
    }
    // END Tambah Karyawan 

}

$karyawanController = new KaryawanController();

// Tambah Karyawan
if(isset($_POST['tambahKaryawan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamat = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

    // Memanggil function tambahKaryawan dengan data dari form
    $karyawanController->tambahKaryawan($nik, $nama, $tempatLahir, $tanggalLahir, $alamat, $noTelepon, $jabatan, $status);
}
// END Tambah Karyawan
?>