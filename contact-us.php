<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/koneksi.php';?>
<?php include 'base_h.php';?>

<body class="js">
    <?php include 'base_n.php';?>
    <?php
$datasetting = mysqli_query($koneksi,"select * from setting order by id desc limit 0,1");
while($st=mysqli_fetch_assoc($datasetting)) { ?>
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="assets/user/support.png" alt="">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i class="fa fa-phone"></i>
                                <h4 class="title">Hubungi Kami:</h4>
                                <ul>
                                    <li><?=$st['telp_satu']?></li>
                                    <li><?=$st['telp_dua']?></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-envelope-open"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li><a href="mailto:<?=$st['email']?>"><?=$st['email']?></a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-location-arrow"></i>
                                <h4 class="title">Alamat:</h4>
                                <ul>
                                    <li><?=$st['alamat']?></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-heart"></i>
                                <h4 class="title">Kenapa Kami:</h4>
                                <ul>
                                    <li><?=$st['deskripsi']?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <div class="mb-5 mr-5 ml-5 text-center">
        <h3>Lokasi Kami</h3><br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.754700879568!2d112.05993301463052!3d-7.815769779776144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857175f9cda31%3A0x3123610563e44ab3!2sSimpang%20Lima%20Gumul!5e0!3m2!1sid!2sid!4v1596549774615!5m2!1sid!2sid"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>



    <?php include 'base_f.php';?>

</body>

</html>