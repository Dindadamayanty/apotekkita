<?php
include "koneksi.php";
$kodeobat = $_POST['kodeobat'];
$namaobat = $_POST['namaobat'];
$satuanobat = $_POST['satuanobat'];
$hargaobat = $_POST['hargaobat'];

if (isset($_POST['updateproduk'])){
    $sql = "UPDATE produk SET
            namaobat='$namaobat', satuan ='$satuanobat', harga='$hargaobat'
            WHERE kodeobat='$kodeobat'";
    $updateproduk = mysqli_query ($koneksi,$sql);

    if ($updateproduk) {
        // echo "data berhasil di edit";
        header ("location:produk.php");
    } else {
        echo "data gagal di edit";
    }

}