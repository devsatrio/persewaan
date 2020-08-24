<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';?>
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>Hasil Pencarian "<?=$_GET['search']?>"</h2>
                        </div>
                        <?php 
                        $halaman = 12;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $produk = mysqli_query($koneksi,"select * from layanan where nama LIKE '%$_GET[search]%' order by id desc limit 0,8");
                        $total = mysqli_num_rows($produk);
                        $pages = ceil($total/$halaman);            
                        $proquery = mysqli_query($koneksi,"select * from layanan where nama LIKE '%$_GET[search]%' order by id desc LIMIT $mulai, $halaman");
                        $no =$mulai+1;
                        if($total > 0){
                        while($dpro=mysqli_fetch_assoc($proquery)) { ?>
                        <div class="col-lg-3 col-md-6 col-12">
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
                                    <h3><a href="layanan.php?name=<?php echo $dpro['slug']?>"><?php echo $dpro['nama']?></a>
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
                    <?php }else{ ?>
                    <div class="col-12 mt-5">
                        <div class="jumbotron">
                            <h1 class="display-4">Oops!</h1>
                            <br>
                            <p class="lead">Kami tidak menemukan produk dengan nama "<b><?= $_GET['search']?></b>", coba
                                cari dengan keyword lainnya.</p>
                            <br>
                            <p class="lead">
                                <a href="index.php">
                                    <button class="btn btn-primary btn-lg" type="button">Back to homes</button>
                                </a>
                            </p>

                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php include 'base_f.php';?>
</body>

</html>