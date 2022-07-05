<?php
include "koneksi.php";
$kodeobat = $_POST['kodeobat'];
$namaobat = $_POST['namaobat'];
$satuanobat = $_POST['satuanobat'];
$hargaobat = $_POST['hargaobat'];

if(isset($_POST['kirim'])){
    $sql="insert into produk (kodeobat,namaobat,satuan,harga)
            values ('$kodeobat','$namaobat','$satuanobat','$hargaobat')";
        $tambahdata = mysqli_query ($koneksi,$sql);
    
    if ($tambahdata){
        // echo "data berhasil diinsert";
        header ("location:produk.php");
    }else{
        echo "data gagal di input";
    }

}
?>