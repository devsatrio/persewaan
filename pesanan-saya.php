<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';
    if($_SESSION['username']==''){
        echo "<script>window.alert('Maaf, Anda Harus Login'); window.location=('index.php')</script>";
    }
    ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Pesanan Saya</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    $cektransaksi = mysqli_query($koneksi,"select * from pemesanan where id_pengguna='$_SESSION[id]'");
    $jumlahtran = mysqli_num_rows($cektransaksi);
    if($jumlahtran > 0){ ?>
    <div class="product-area section mb-5" style="padding-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tgl Pesan</th>
                                <th class="text-center">Waktu Sewa</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $datapesanan = mysqli_query($koneksi,"select * from pemesanan where id_pengguna='$_SESSION[id]' order by id desc");
                            while($row=mysqli_fetch_assoc($datapesanan)) { ?>
                            <tr>
                                <td class="text-center"><a
                                        href="detail_pesanan.php?kode=<?=$row['kode']?>"><?=$row['kode']?></a></td>
                                <td class="text-center"><?=$row['tanggal_pesan']?></td>
                                <td class="text-center"><?=$row['tanggal_sewa']?> - <?=$row['tanggal_selesai_sewa']?>
                                </td>
                                <td class="text-center">
                                    <?php if($row['status']=='Diterima'){
                                    if($row['gambar_tf']!=''){
                                        echo "Menunggu Konfirmasi Pembayaran Oleh Admin";
                                    }else{
                                        echo $row['status'];
                                    }
                                }else{
                                    echo $row['status'];
                                }?>
                                </td>
                                <td class="text-right"><?php echo "Rp. ".number_format($row['total'],0,',','.'); ?></td>
                                <td class="text-center">
                                    <?php if($row['status']=='Menunggu Konfirmasi'){ ?>
                                    <a href="php/cancel_pesanan.php?id=<?=$row['id']?>"
                                        onclick="return confirm('Cancel Pesanan ?')">
                                        <button type="button" class="btn">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </a>
                                    <?php }else if($row['status']=='Diterima'){ ?>
                                    <a href="konfirmasi_pesanan.php?kode=<?=$row['kode']?>">
                                        <button type="button" class="btn">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </a>
                                    <?php }else{ echo "-"; } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron">
                        <h1 class="display-4">Oops !</h1>
                        <br>
                        <p class="lead">Pesanan anda kosong, silahkan menambahkan pesanan</p>
                        <hr class="my-4">
                        <p class="lead">
                            <a href="tambah-pesanan.php"> <button class="btn" type="button">Buat Pesanan</button></a>
                            <a href="index.php"> <button class="btn" type="button">Back To Home</button></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
    <br><br>
    <?php include 'base_f.php';?>

</body>

</html>