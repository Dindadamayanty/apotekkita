<?php
include ("koneksi.php");
$kodeproduk = $_GET['kode'];
$sql = "DELETE FROM produk WHERE kodeobat='$kodeproduk'";
$deletedata = mysqli_query ($koneksi,$sql);

if ($deletedata) {
//  echo "data telah di hapus";
 header ("location:produk.php");
} else {
    echo "data gagal di hapus";
}
?>