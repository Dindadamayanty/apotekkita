<?php
include "koneksi.php";
$id = $_POST ['id'];
$kodeobat = $_POST['kodeobat'];
$nopasien = $_POST['nomorpasien'];
$jumlahobat = $_POST['jumlahobat'];

if (isset($_POST['kirim'])) {
    $sql = "UPDATE transaksi SET
            kodeobat = '$kodeobat', 
            nomorpasien = '$nopasien', 
            jumlahobat = '$jumlahobat'
            WHERE id = '$id'";
    $updatetransaksi = mysqli_query ($koneksi,$sql);

    if ($updatetransaksi) {
        // echo "data berhasil di update";
        header ("location:transaksi.php");
    } else {
        echo "data gagal di update";
    }
}