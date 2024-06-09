<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "uniska_latihan_app";

$connection = mysqli_connect($serverName, $username, $password, $databaseName);

if($connection) {
    // echo "Koneksi berhasil";
} else {
    die("Koneksi gagal : " . mysqli_connect_error());
}

?>