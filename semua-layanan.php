<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';?>

    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Semua Layanan</h2>
                        </div>
                        <?php 
                        $halaman = 12;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $produk = mysqli_query($koneksi,"select * from layanan order by id desc limit 0,8");
                        $total = mysqli_num_rows($produk);
                        $pages = ceil($total/$halaman);            
                        $proquery = mysqli_query($koneksi,"select * from layanan order by id desc LIMIT $mulai, $halaman");
                        $no =$mulai+1;
                        while($dpro=mysqli_fetch_assoc($proquery)) { ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="layanan.php?name=<?php echo $dpro['slug']?>">
                                        <img class="default-img"
                                            src="assets/gambar/layanan/<?php echo $dpro['gambar']?>" alt="#">
                                    </a>

                                    <div class="button-head text-center">
                                        <a title="Add to cart" href="layanan.php?name=<?php echo $dpro['slug']?>">Lihat
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
                    <div class="col-12 text-center mt-5">
                        <?php for ($i=1; $i<=$pages ; $i++){ ?>
                        <a href="?halaman=<?php echo $i; ?>">
                            <button type="button" class="btn"><?php echo $i; ?></button>
                        </a>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="shop-sidebar">
                        <div class="single-widget category mt-5">
                            <h3 class="title">Kategori</h3>
                            <ul class="categor-list">
                                <li><a href="kategori.php?kategori=Gedung">Gedung</a></li>
                                <li><a href="kategori.php?kategori=Catering">Catering</a></li>
                                <li><a href="kategori.php?kategori=Dekorasi">Dekorasi</a></li>
                                <li><a href="kategori.php?kategori=Lain-Lain">Lain-Lain</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Product Style 1  -->


    <?php include 'base_f.php';?>
</body>

</html>