<?php
include "koneksi.php";
$kodeobat = $_POST['kodeobat'];
$nopasien = $_POST['nomorpasien'];
$jumlahobat = $_POST['jumlahobat'];

if (isset($_POST['kirim'])){
    $sql="insert into transaksi(kodeobat, nomorpasien,jumlahobat)
    values ('$kodeobat','$nopasien','$jumlahobat')";
    $tambahdata = mysqli_query ($koneksi,$sql);

    if($tambahdata){
        // echo "data berhasil diinsert";
        header ("location:transaksi.php");
    } else {
        echo "data gagal di insert";
    }
}
