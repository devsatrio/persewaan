<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';?>

    <?php $produk = mysqli_query($koneksi,"select * from layanan where slug='$_GET[name]'");
    while($dpro=mysqli_fetch_assoc($produk)) { ?>
    <section class="product-area shop-sidebar shop section mr-5 ml-5 mt-3 pt-4">
        <div class="text-center">
            <h1>Detail Produk</h1>
        </div>
        <br>
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="product-gallery">
                    <img src="assets/gambar/layanan/<?=$dpro['gambar']?>" width="100%" alt="#" class="img-thumbnail">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="quickview-content">
                    <h2><?php echo $dpro['nama']?></h2>
                    
                    <h3><?php echo "Rp. ".number_format($dpro['biaya'],0,',','.'); ?> <?php if($dpro['kategori']=='Gedung'){ echo "Per Hari"; }?></h3>
                    <div class="quickview-peragraph">
                        <p><?=$dpro['deskripsi']?></p>
                    </div>
                    <br>
                    <a href="tambah-pesanan.php"> <button class="btn" type="button">Buat Pesanan</button></a>
                    <button type="button" onclick="history.go(-1)" class="btn">Kembali</button>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!--/ End Product Style 1  -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Layanan Lainnya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">

                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php $produk = mysqli_query($koneksi,"select * from layanan order by rand() limit 0,4");
                                        while($dpro=mysqli_fetch_assoc($produk)) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="layanan.php?name=<?php echo $dpro['slug']?>">
                                                        <img class="default-img"
                                                            src="assets/gambar/layanan/<?php echo $dpro['gambar']?>"
                                                            alt="#">
                                                    </a>

                                                    <div class="button-head text-center">
                                                        <a title="Add to cart" href="layanan.php?name=<?php echo $dpro['slug']?>">Lihat Detail Layanan</a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="layanan.php?name=<?php echo $dpro['slug']?>"><?php echo $dpro['nama']?></a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <span><?php echo "Rp. ".number_format($dpro['biaya'],0,',','.'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'base_f.php';?>
</body>

</html>