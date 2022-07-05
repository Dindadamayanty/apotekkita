<?php
include "koneksi.php";
$nopasien = $_POST['nomorpasien'];
$namapasien = $_POST['namapasien'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

if(isset($_POST['kirim'])){
    $sql="insert into pasien (nomorpasien, namapasien, alamatpasien, nohp)
            values ('$nopasien','$namapasien','$alamat','$nohp')";
        $tambahdata = mysqli_query ($koneksi,$sql);
    
    if ($tambahdata){
        // echo "data berhasil diinsert";
        header ("location:pasien.php");
    }else{
        echo "data gagal di input";
    }

}
?>