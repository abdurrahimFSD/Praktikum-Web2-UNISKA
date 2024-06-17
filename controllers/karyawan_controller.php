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
        $resultCekNik = mysqli_query($connection, $queryCekNik);

        if(mysqli_num_rows($resultCekNik) > 0) {
            // Jika NIK sudah ada maka redirect ke halaman karyawan_add.php 
            $_SESSION['nikSudahAda'] = $nik;
            header("location: ../pages/karyawan_add.php");
            exit;
        }

        // Query untuk menambahkan dataKaryawan ke database
        $queryAddKaryawan = "INSERT INTO karyawan (nik, nama, tempat_lahir, tanggal_lahir, alamat, no_telepon, jabatan, status) VALUES ('$nik', '$nama', '$tempatLahir', '$tanggalLahir', '$alamat', '$noTelepon', '$jabatan', '$status')";
        // Eksekusi query
        $resultAddKaryawan = mysqli_query($connection, $queryAddKaryawan);

        // Cek apakah query berhasil di jalankan
        if($resultAddKaryawan) {
            // Jika berhasil, redirect ke halaman karyawan_add.php
            $_SESSION['doneTambahKaryawan'] = true;
            header("location: ../pages/karyawan_add.php");
            exit;
        }
    }
    // END Tambah Karyawan 


    // Hapus Karyawan
    public function hapusKaryawan($nik) {
        global $connection;

        // Query untuk menghapus dataKaryawan berdasarkan nik
        $queryDeleteKaryawan = "DELETE FROM karyawan WHERE nik = '$nik'";
        $resultDeleteKaryawan = mysqli_query($connection, $queryDeleteKaryawan);

        // Cek apakah query berhasil di jalankan
        if($resultDeleteKaryawan) {
            $_SESSION['doneDeleteKaryawan'] = true;
            header("location: ../pages/karyawan_data.php");
            exit;
        }
    }
    // END Hapus Karyawan


    // Edit Karyawan
    public function editKaryawan($nik, $nama, $tempatLahir, $tanggalLahir, $alamat, $noTelepon, $jabatan, $status) {

    }
    // END Edit Karyawan

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


// Hapus Karyawan
if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    // Memanggil function hapusKaryawan
    $karyawanController->hapusKaryawan($nik);
}
// END Hapus Karyawan


// Edit Karyawan
if(isset($_POST['editKaryawan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamat = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

    // Memanggil function editKaryawan dengan data dari form
    $karyawanController->editKaryawan($nik, $nama, $tempatLahir, $tanggalLahir, $alamat, $noTelepon, $jabatan, $status);
}
// END Edit Karyawan
?>