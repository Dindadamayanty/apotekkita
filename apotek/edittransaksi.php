<?php
require "koneksi.php";
$kode = $_GET['id'];
$sql = "SELECT * FROM transaksi WHERE id='$kode'";
$tampiltransaksi= mysqli_query ($koneksi,$sql);
$edittransaksi = mysqli_fetch_array ($tampiltransaksi);
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek Dinda: transaksi</title>
    <link rel ="stylesheet" href="style.css"/>

</head>
<body>
    <fieldset>
        <h1><img src="pharmacy.png" ></h1>
        <table border="1" class ="tabel1">

            <tr class ="tabel1 submenu">
                <th class="sub"><a href="produk.php">produk</a></th>
                <th class="sub"><a href="pasien.php">pasien</a></th>
                <th class="sub"><a href="transaksi.php">transaksi</a></th>
            </tr>
            <tr>
                <td colspan="3">
                    <form action="updatetransaksi.php" method="post">
                        <table cellpadding="5" class="tabel1 inside">
                            <tr>
                                <td colspan="3"><h4>Form Transaksi</h4></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="id" value="<?php echo $edittransaksi["id"];?>"></td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    <input type="text" name="kodeobat" value="<?php echo $edittransaksi["kodeobat"];?>" required="required">
                                    <label>Kode Obat</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    <input type="text" name="nomorpasien" value="<?php echo $edittransaksi["nomorpasien"];?>" required="required">
                                    <label>Nomor pasien</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="judulinput">
                                    <input type="text" name="jumlahobat" value="<?php echo $edittransaksi["jumlahobat"];?>" required="required">
                                    <label>Jumlah Obat</label>
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

        <h3>Daftar Produk</h3>
        <table border="1" class="tabel2">
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nomor Pasien</th>
                <th>Nama Pasien</th>
                <th>Alamat Pasien</th>
                <th>No Hp</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>

            <?php
            require "koneksi.php";
            $a=0;
            $b=0;
            $sql="SELECT * FROM transaksi
                    JOIN produk ON transaksi.kodeobat=produk.kodeobat 
                    JOIN pasien ON transaksi.nomorpasien=pasien.nomorpasien";
            $tampiltransaksi = mysqli_query ($koneksi,$sql);
            // $datatransaksi = mysqli_fetch_array ($tampiltransaksi);
            $i=1;
            while ($datatransaksi = mysqli_fetch_array($tampiltransaksi)){
            $a= $datatransaksi['harga'] * $datatransaksi['jumlahobat'];
            $b += $a;
            
            ?>

                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$datatransaksi['kodeobat'];?></td>
                            <td><?=$datatransaksi['nomorpasien'];?></td>
                            <td><?=$datatransaksi['namapasien'];?></td>
                            <td><?=$datatransaksi['alamatpasien'];?></td>
                            <td><?=$datatransaksi['nohp'];?></td>
                            <td><?=$datatransaksi['jumlahobat'];?></td>
                            <td><?=$datatransaksi['harga'];?></td>
                            <td><?=$a?></td>
                            <td><a href="edittransaksi.php?kode=<?=$datatransaksi["id"];?>">Edit</a> |
                                <a href ="hapustransaksi.php?kode=<?= $datatransaksi["id"];?>">Hapus</a>
                            </td>
                        </tr>

                    <?php
                    } 
                    ?>
                    </table>

    </fieldset>
</body>
</html>