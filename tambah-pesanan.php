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
    <?php
    $kode = $_SESSION['id'];?>
    <section id="contact-us" class="contact-us section mt-1" style="padding-top:25px;">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <h2>Buat Pesanan</h2>
                        <div class="single-head mt-2">
                            <form action="php/aksi_pesan_layanan.php" method="post" onsubmit="return validform()">
                                <input type="hidden" name="kode" value="<?=$kode?>">
                                <div class="form-group">
                                    <label>Tanggal Sewa</label>
                                    <div class="input-group date form_datetime" data-date-format="yyyy-mm-dd / HH:ii p"
                                        data-link-field="dtp_input1">
                                        <input class="form-control" name="tglpesan" size="16" type="text" id="tglsatu" value="" readonly required>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input1" value="" required/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Selesai Sewa</label>
                                    <div class="input-group date form_datetime" data-date-format="yyyy-mm-dd / HH:ii p"
                                        data-link-field="dtp_input2">
                                        <input class="form-control" name="tglselesaipesan" size="16" type="text" id="tgldua" value="" readonly required>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" value="" required/><br>
                                    <span>*Keterangan : AM (12 malam - 12 siang) / PM (12 siang - 12 malam)</span>
                                </div>
                                <hr>
                                <label>Pilih Gedung</label>
                                <div class="form-group mb-4">
                                    <select name="gedung" class="form-control" width="100%">
                                        <?php $datagedung = mysqli_query($koneksi,"select * from layanan where kategori='Gedung'");
                                        while($gdg=mysqli_fetch_assoc($datagedung)) { ?>
                                        <option value="<?=$gdg['id']?>"><?=$gdg['nama']?> -
                                            <?php echo "Rp. ".number_format($gdg['biaya'],0,',','.'); ?> / Hari</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <br><br>
                                <label for="exampleInputEmail1">Pilih Catering</label>
                                <div class="form-group">
                                    <select name="catering" class="form-control" width="100%">
                                        <option value="Tidak Memesan">Tidak Memesan</option>
                                        <?php $datacatering = mysqli_query($koneksi,"select * from layanan where kategori='Catering'");
                                        while($ctr=mysqli_fetch_assoc($datacatering)) { ?>
                                        <option value="<?=$ctr['id']?>"><?=$ctr['nama']?> -
                                            <?php echo "Rp. ".number_format($ctr['biaya'],0,',','.'); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <br><br>
                                <label for="exampleInputEmail1">Pilih Dekorasi</label>
                                <div class="form-group">
                                    <select name="dekor" class="form-control" width="100%">
                                        <option value="Tidak Memesan">Tidak Memesan</option>
                                        <?php $datadekorasi = mysqli_query($koneksi,"select * from layanan where kategori='Dekorasi'");
                                        while($dkr=mysqli_fetch_assoc($datadekorasi)) { ?>
                                        <option value="<?=$dkr['id']?>"><?=$dkr['nama']?> -
                                            <?php echo "Rp. ".number_format($dkr['biaya'],0,',','.'); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <br><br>
                                <label for="exampleInputEmail1">Layana Lainnya</label>
                                <div class="form-group">
                                    <select name="lain" class="form-control" width="100%">
                                        <option value="Tidak Memesan">Tidak Memesan</option>
                                        <?php $datalain = mysqli_query($koneksi,"select * from layanan where kategori='Lain-Lain'");
                                        while($lain=mysqli_fetch_assoc($datalain)) { ?>
                                        <option value="<?=$lain['id']?>"><?=$lain['nama']?> -
                                            <?php echo "Rp. ".number_format($lain['biaya'],0,',','.'); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <br><br>
                                <hr>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nomor Telfon</label>
                                    <input type="text" class="form-control" name="pass" value="<?=$_SESSION['telp']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Keterangan</label>
                                    <textarea name="keterangan" class="form-control" id="" cols="30"
                                        rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn">Submit</button>
                                <button type="button" onclick="history.go(-1)" class="btn">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'base_f.php';?>
    <script>
        function validform(){
            if($('#tglsatu').val()=='' || $('#tgldua').val()==''){
                alert('Maaf, Tanggal harus di isi');
                return false;
            }else{
                return true;
            }
        }
    </script>

</body>

</html>