<?php

function indonesiaTgl($tanggal) {
    $tgl = substr($tanggal,8,2);
    $bln = substr($tanggal,5,2);
    $thn = substr($tanggal,0,4);
    $tanggal = "$tgl-$bln-$thn";
    return $tanggal;
}

function formatAngka($angka) {
    $hasil = number_format($angka,0, ",",".");
    return $hasil;
}

$now = strtotime(date("Y-m-d"));
$maxYear = date('Y-m-d', strtotime('- 16 year', $now));
$minYear = date('Y-m-d', strtotime('- 50 year', $now));
?>