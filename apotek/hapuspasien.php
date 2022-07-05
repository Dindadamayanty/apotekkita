<?php
include ("koneksi.php");
$nomorpasien = $_GET['nomor'];
$sql = "DELETE FROM pasien WHERE nomorpasien='$nomorpasien'";
$deletepasien = mysqli_query ($koneksi,$sql);

if ($deletepasien) {
    //  echo "data telah di hapus";
     header ("location:pasien.php");
    } else {
        echo "data gagal di hapus";
    }
    ?>