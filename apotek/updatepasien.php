<?php
include "koneksi.php";
$nopasien = $_POST['nomorpasien'];
$namapasien = $_POST['namapasien'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

if(isset($_POST['kirim'])){
    $sql="UPDATE pasien SET
            namapasien='$namapasien', alamatpasien='$alamat', nohp='$nohp'
            where nomorpasien='$nopasien'";
    $updatepasien = mysqli_query ($koneksi,$sql);
    
    if ($updatepasien){
        // echo "data berhasil diupdate";
        header ("location:pasien.php");
    }else{
        echo "data gagal di update";
    }

}
?>