<?php 
$x = true;
 
if ($x) {
    header("Location: ./pages/dashboard.php");
    exit;
}else {
    echo("Halaman index");
}
?>
