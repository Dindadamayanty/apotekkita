<?php
ob_start();
require ("transaksi.php");
$id = $_GET['id'];
$sql = "DELETE FROM transaksi WHERE id = '$id'";
$deletetransaksi = mysqli_query ($koneksi,$sql);
if ($deletetransaksi) {
    header ("location:transaksi.php");
} else {
    echo "data gagal di hapus";
} 
ob_end_flush();
?>