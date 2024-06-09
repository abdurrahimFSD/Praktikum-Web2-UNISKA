<?php 
$x = true;
 
if ($x) {
    header("Location: ./pages/beranda.php");
    exit;
}else {
    echo("Halaman index");
}
?>
