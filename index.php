<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';?>
    <section class="hero-slider">
        <?php $banner = mysqli_query($koneksi,"select * from slider where status='Banner' order by id desc limit 0,1");
        while($dban=mysqli_fetch_assoc($banner)) { ?>
        <div class="single-slider" style="background-image: url('assets/gambar/<?php echo $dban['gambar'];?>');">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row mb-5">

                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1 class="mb-3"
                                            style="background-color:white; width:auto;display:inline-block;">
                                            <?php echo $dban['judul'];?></h1>
                                        <p style="background-color:white; width:auto;display:inline-block;">
                                            <?php echo $dban['deskripsi'];?></p>
                                        <?php if($dban['link']!=''){?>
                                        <div class="button">
                                            <a href="<?php echo $dban['link'];?>" class="btn">Click Me</a>
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

        <?php } ?>
    </section>
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Pelayanan Cepat</h4>
                        <p>Jaminan tidak ada keterlambatan layanan</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Uang Kembali</h4>
                        <p>Uang kembali apabila pelayanan tak memuaskan</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Pembayaran Aman</h4>
                        <p>100% transaksi dalam web ini aman</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Harga Terbaik</h4>
                        <p>Kami menjanjikan harga layanan terbaik dikelasnya</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Layanan Terbaru</h2>
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
                                        <?php $produk = mysqli_query($koneksi,"select * from layanan order by id desc limit 0,8");
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
                                                        <a title="Add to cart"
                                                            href="layanan.php?name=<?php echo $dpro['slug']?>">Lihat
                                                            Detail Layanan</a>
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
    <section class="midium-banner">
        <div class="container">
            <div class="row">
                <?php $promo = mysqli_query($koneksi,"select * from slider where status='Promo' order by id desc");
                while($dpromo=mysqli_fetch_assoc($promo)) { ?>
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="single-banner">
                        <img src="assets/gambar/<?php echo $dpromo['gambar'];?>" alt="#">
                        <div class="content">
                            <h3><?php echo $dpromo['judul'];?></h3>
                            <p style="color:black;"><?php echo $dpromo['deskripsi']?></p>
                            <?php if($dpromo['link']!=''){?>
                            <a href="<?php echo $dpromo['link'];?>">Click Me</a>
                            <?php } ?>


                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Kategori</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 mb-3 text-center">
                    <a href="kategori.php?kategori=Gedung">
                        <div class="single-banner mb-3">
                            <img src="assets/img/buildings.png" alt="..." class="img-thumbnail" width="60%">
                        </div>
                        <h5>Gedung</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-3 text-center">
                    <a href="kategori.php?kategori=Catering">
                        <div class="single-banner mb-3">
                            <img src="assets/img/van.png" alt="..." class="img-thumbnail" width="60%">
                        </div>
                        <h5>Catering</h5>
                </div>
                </a>
                <div class="col-lg-3 col-md-3 col-12 mb-3 text-center">
                    <a href="kategori.php?kategori=Dekorasi">
                        <div class="single-banner mb-3">
                            <img src="assets/img/party.png" alt="..." class="img-thumbnail" width="60%">
                        </div>
                        <h5>Dekorasi</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-3 text-center">
                    <a href="kategori.php?kategori=Lain-Lain">
                        <div class="single-banner mb-3">
                            <img src="assets/img/guitar.png" alt="..." class="img-thumbnail" width="60%">

                        </div>
                        <h5>Lain-Lain</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'base_f.php';?>
</body>

</html>