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
    
        <h1><a href="produk.php"><img src="pharmacy.png" ></a></h1>
        <table border="1" class ="tabel1">

            <tr class ="tabel1 submenu">
                <th><a href="produk.php">produk</a></th>
                <th><a href="pasien.php">pasien</a></th>
                <th><a href="transaksi.php">transaksi</a></th>
            </tr>
            <tr>
                <td colspan="3">
                    <form action="hasilpasien.php" method="post">
                        <table cellpadding="5" class="tabel1 inside">
                            <tr>
                                <td colspan="3"><h4>Form Pasien</h4></td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    
                                <input type="text" name="nomorpasien" required="required">
                                <label>Nomor Pasien</label>

                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                <input type="text" name="namapasien" required="required">
                                <label>Nama Pasien</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    <input type="text" name="alamat" required="required">
                                    <label>Alamat Pasien</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput"><input type="text" name="nohp" required="required">
                                <label>No Hp</label>
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

        <h3 >Daftar Pasien</h3>
        <table border="1" class="tabel2">
                <th>No</th>
                <th>Nomor Pasien</th>
                <th>Nama Pasien</th>
                <th>Alamat Pasien</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>

<?php
require "koneksi.php";

$sql="select * from pasien order by namapasien";
$tampilpasien = mysqli_query ($koneksi,$sql);
$i=1;
while ($datapasien = mysqli_fetch_array($tampilpasien)){
?>

            <tr>
                <td><?=$i++?></td>
                <td><?=$datapasien["nomorpasien"];?></td>
                <td><?=$datapasien["namapasien"];?></td>
                <td><?=$datapasien["alamatpasien"];?></td>
                <td><?=$datapasien["nohp"];?></td>
                <td><a href="editpasien.php?nomor=<?=$datapasien["nomorpasien"];?>">Edit</a> |
                    <a href ="hapuspasien.php?nomor=<?= $datapasien["nomorpasien"];?>">Hapus</a>
                </td>
            </tr>

        <?php
        } ?>
        </table>


    </fieldset>
</body>
</html>