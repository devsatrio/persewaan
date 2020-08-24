<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';
    if($_SESSION['username']==''){
        echo "<script>window.alert('Maaf, Anda Harus Login'); window.location=('index.php')</script>";
    }
    $datatransaksi = mysqli_query($koneksi,"select * from pemesanan where kode='$_GET[kode]'");
    while($trans=mysqli_fetch_assoc($datatransaksi)) {
    ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Konfirmasi Pembayaran Pesanan <?=$trans['kode']?></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    Tanggal Pesan : <?=$trans['tanggal_pesan']?> <br>
                    Waktu Sewa : <?=$trans['tanggal_sewa']?> - <?=$trans['tanggal_selesai_sewa']?>
                </div>
                <br><br>
                <div class="col-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="main-hading">
                                <th class="text-center">Layanan</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            $query = mysqli_query($koneksi,"select pemesanan_detail.*,layanan.nama from pemesanan_detail left join layanan on layanan.id = pemesanan_detail.id_layanan where pemesanan_detail.id_pemesanan='$trans[id]' order by pemesanan_detail.id desc");
                            while($row=mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td class="text-center" data-title="Description">
                                    <p class="product-name"><?=$row['nama']?></p>

                                </td>
                                <td class="text-center" data-title="Price">
                                    <span><?php echo "Rp. ".number_format($row['harga'],0,',','.'); ?> X
                                        <?php echo $row['lama_pesan']?> Hari</span>
                                </td>
                                <td class="text-right" data-title="Total">
                                    <span><?php echo "Rp. ".number_format($row['subtotal'],0,',','.'); ?></span>
                                </td>
                            </tr>
                            <?php 
                            } ?>

                            <tr>
                                <td colspan="2" class="text-right"><b>Total</b></td>
                                <td class="text-right">
                                    <b><?php echo "Rp. ".number_format($trans['total'],0,',','.'); ?></b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-12 mb-5">
                                <h4 class="title">Status:</h4>
                                <?=$trans['status']?>
                                <br><br>
                                <h4 class="title">Pesan Untuk Penyedia Layanan:</h4>
                                <?=$trans['pesan_penyewa']?>
                                <br><br>
                                <h4 class="title">Keterangan:</h4>
                                <?=$trans['keterangan']?>
                                <?php
                                $datasetting = mysqli_query($koneksi,"select * from setting order by id desc limit 0,1");
                                while($st=mysqli_fetch_assoc($datasetting)) { ?>
                                <hr>
                                <h4 class="title">Cara Bayar:</h4>
                                <?=$st['cara_bayar']?>
                                <?php } ?>
                                <?php if($trans['gambar_tf']!=''){?>
                                <hr>
                                <h4 class="title">Bukti Pembayaran:</h4>
                                <img src="assets/gambar/bukti/<?=$trans['gambar_tf']?>" alt="..." class="img-thumbnail">
                                <?php } ?>
                            </div>
                            <div class="col-lg-4 col-12">
                                <form action="php/konfirmasi_pembayaran_pesanan.php" method="post" enctype="multipart/form-data">
                                <?php if($trans['status']=='Diterima'){?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Upload Bukti Transfer</label>
                                        <input type="file" class="form-control" name="gambar" accept="image/*" required>
                                        <input type="hidden" name="kode" value="<?=$trans['kode']?>">
                                        <input type="hidden" name="gambarlama" value="<?=$trans['gambar_tf']?>">
                                        <small id="emailHelp" class="form-text text-muted">Upload bukti pembayaran sah seperti bukti transfer, nota dan lain - lain</small>
                                    </div>
                                    <button type="submit" class="btn">Simpan</button>
                                <?php } ?>
                                    <button type="button" onclick="history.go(-1)" class="btn">Kembali</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php include 'base_f.php';?>
</body>

</html>