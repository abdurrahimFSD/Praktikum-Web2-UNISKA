<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "uniska_latihan_app";

$connection = mysqli_connect($serverName, $username, $password, $databaseName);

if (mysqli_connect_errno()) {
    echo "Gagal melakukan koneksi ke database : " . mysqli_connect_error();
}

?>