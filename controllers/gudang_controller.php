<?php

include '../includes/connection.php';
include '../includes/library.php';
session_start();

class GudangController {
    // Tambah Gudang
    public function tambahGudang($idGudang, $namaGudang, $lokasiGudang, $luasGudang) {
        // Mengakses koneksi database yang telah dibuat di file connection.php
        global $connection;

        // Cek apakah Nama Gudang sudah ada
        $queryCekNamaGudang = "SELECT * FROM gudang WHERE nama_gudang = '$namaGudang'";
        $resultCekNamaGudang = mysqli_query($connection, $queryCekNamaGudang);

        if(mysqli_num_rows($resultCekNamaGudang) > 0) {
            // Jika Nama Gudang sudah ada maka redirect ke halaman gudang_add.php 
            $_SESSION['namaGudangSudahAda'] = $namaGudang;
            // Menambahkan penyimpanan data form ke session saat nama gudang sudah ada untuk mempertahankan input pengguna di halaman gudang_add.php
            $_SESSION['form_data'] = $_POST;
            header("location: ../pages/gudang_add.php");
            exit;
        }

        // Query untuk menambahkan dataGudang ke database
        $queryAddGudang = "INSERT INTO gudang (nama_gudang, lokasi_gudang, luas_gudang) VALUES ('$namaGudang', '$lokasiGudang', '$luasGudang')";
        // Eksekusi query
        $resultAddGudang = mysqli_query($connection, $queryAddGudang);

        // Cek apakah query berhasil di jalankan
        if($resultAddGudang) {
            // Jika berhasil, redirect ke halaman gudang_add.php
            $_SESSION['doneTambahGudang'] = true;
            header("location: ../pages/gudang_add.php");
            exit;
        }
    }
    // END Tambah Gudang


    // Hapus Gudang
    public function hapusGudang($idGudang) {
        global $connection;

        // Query untuk menghapus dataGudang berdasarkan id_gudang
        $queryDeleteGudang = "DELETE FROM gudang WHERE id_gudang = '$idGudang'";
        $resultDeleteGudang = mysqli_query($connection, $queryDeleteGudang);

        // Cek apakah query berhasil di jalankan
        if($resultDeleteGudang) {
            $_SESSION['doneDeleteGudang'] = true;
            header("location: ../pages/gudang_data.php");
            exit;
        }
    }
    // END Hapus Gudang


    // Edit Gudang
    public function editGudang($idGudang, $namaGudang, $lokasiGudang, $luasGudang) {
        global $connection;

        // Cek apakah Nama Gudang sudah ada
        $queryCekNamaGudang = "SELECT * FROM gudang WHERE nama_gudang = '$namaGudang'";
        $resultCekNamaGudang = mysqli_query($connection, $queryCekNamaGudang);

        if(mysqli_num_rows($resultCekNamaGudang) > 0) {
            // Jika Nama Gudang sudah ada maka redirect ke halaman gudang_add.php 
            $_SESSION['namaGudangSudahAda'] = $namaGudang;
            header("location: ../pages/gudang_edit.php");
            exit;
        }

        // Query untuk mengedit data gudang berdasarkan id_gudang
        $queryEditGudang = "UPDATE gudang SET nama_gudang='$namaGudang', lokasi_gudang='$lokasiGudang', luas_gudang='$luasGudang' WHERE id_gudang ='$idGudang'";
        $resultEditGudang = mysqli_query($connection, $queryEditGudang);

        // Cek apakah query berhasil dijalankan
        if($resultEditGudang) {
            // Buat session doneEditGudang
            $_SESSION['doneEditGudang'] = true;
            header("location: ../pages/gudang_edit.php");
            exit;
        }
    }
    // END Edit Gudang

}

$gudangController = new GudangController();


// Tambah Gudang
if(isset($_POST['tambahGudang'])) {
    $idGudang = $_POST['idGudang'];
    $namaGudang = $_POST['namaGudang'];
    $lokasiGudang = $_POST['lokasiGudang'];
    $luasGudang = $_POST['luasGudang'];

    // Memanggil function tambahGudang dengan data dari form
    $gudangController->tambahGudang($idGudang, $namaGudang, $lokasiGudang, $luasGudang);
}
// END Tambah Gudang


// Hapus Gudang
if(isset($_GET['id_gudang'])) {
    $idGudang = $_GET['id_gudang'];

    // Memanggil function hapusGudang
    $gudangController->hapusGudang($idGudang);
}
// END Hapus Gudang


// Edit Gudang
if(isset($_POST['editGudang'])) {
    $idGudang = $_POST['idGudang'];
    $namaGudang = $_POST['namaGudang'];
    $lokasiGudang = $_POST['lokasiGudang'];
    $luasGudang = $_POST['luasGudang'];

    // Memanggil function editGudang dengan data dari form
    $gudangController->editGudang($idGudang, $namaGudang, $lokasiGudang, $luasGudang);
}
// END Edit Gudang
?>