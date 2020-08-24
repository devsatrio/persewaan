<?php
error_reporting(0);	
session_start();

include 'koneksi.php';
$nama 	    = $_POST['nama'];
$kategori 	= $_POST['kategori'];
$biaya 	    = $_POST['biaya'];
$deskripsi = $_POST['deskripsi'];
$kode       = $_POST['kode'];
$status = $_POST['status'];
$gambarlama = $_POST['gambar_lama'];
$slug = strtolower(str_replace(' ','-',$nama));

if(!file_exists($_FILES['gambar']['tmp_name']) || !is_uploaded_file($_FILES['gambar']['tmp_name'])) {
    $query = mysqli_query($koneksi,"update layanan set nama='$nama',kategori='$kategori',biaya='$biaya',deskripsi='$deskripsi',slug='$slug' where id='$kode'");
    echo "<script>window.alert('Data Berhasil Disimpan'); window.location=('../view/data_layanan.php')</script>";
}else{
    $target = '../assets/gambar/layanan/'.$gambarlama;
        if(file_exists($target)){
            unlink($target);
        }
    $namaimg = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];	
    move_uploaded_file($file_tmp, '../assets/gambar/layanan/'.$namaimg);
    $query = mysqli_query($koneksi,"update layanan set nama='$nama',kategori='$kategori',biaya='$biaya',deskripsi='$deskripsi',gambar='$namaimg',slug='$slug' where id='$kode'");
    echo "<script>window.alert('Data Berhasil Disimpan'); window.location=('../view/data_layanan.php')</script>";
}

?>