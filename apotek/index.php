<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek Dinda: produk</title>
    <link rel ="stylesheet" href="style.css"/>

</head>
<body>
    <fieldset>
        <h1><img src="pharmacy.png" ></h1>
        <table border="1" class ="tabel1">
            <tr class ="tabel1 submenu">
                
                <th><a href="produk.php">produk</a></th>
                <th><a href="pasien.php">pasien</a></th>
                <th><a href="transaksi.php">transaksi</a></th>
                
            </tr>
            <tr>
                <td colspan="3">
                    <form action="hasilproduk.php" method="post">
                        <table cellpadding="5" class="tabel1 inside">
                            <tr>
                                <td colspan="3"><h4>Form produk</h4></td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    
                                    <input type="text" name="kodeobat" required="required">
                                    <label>Kode Obat</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    
                                   <input type="text" name="namaobat" required="required">
                                   <label>Nama Obat</label> 
                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    
                                    <input type="text" name="satuanobat" required="required">
                                    <label>Satuan</label>
                                </td>
                              
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    
                                    <input type="text" name="hargaobat" required="required">
                                    <label>Harga (Rp)</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">
                                    <input type="submit" name="kirim" value="SUBMIT" >
                                </td>
                            </tr>
                        
                        </table>
                    </form>
                </td>
            </tr>

        </table>

        <br>
        <br>

        <h3 >Daftar Produk</h3>
        <table border="1" class="tabel2">
            <tr>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>

<?php
require "koneksi.php";

$sql="select * from produk order by kodeobat";
$tampilproduk = mysqli_query ($koneksi,$sql);
// $dataproduk = mysqli_fetch_array($tampilproduk);
$i=1;
while ($dataproduk = mysqli_fetch_array($tampilproduk)){
?>

            <tr>
                <td><?=$i++?></td>
                <td><?=$dataproduk["kodeobat"];?></td>
                <td><?=$dataproduk["namaobat"];?></td>
                <td><?=$dataproduk["satuan"];?></td>
                <td><?=$dataproduk["harga"];?></td>
                <td><a href="editproduk.php?kode=<?=$dataproduk["kodeobat"];?>">Edit</a> |
                    <a href ="hapusproduk.php?kode=<?= $dataproduk["kodeobat"];?>">Hapus</a>
                </td>
            </tr>

        <?php
        } ?>
        </table>


    </fieldset>
</body>
</html>