<?php

include '../includes/connection.php';
include '../includes/library.php';
session_start();

class GudangController {
    // Tambah Gudang
    public function tambahGudang($idGudang, $namaGudang, $lokasiGudang, $luasGudang) {
        
    }
    // END Tambah Gudang
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
?>