<?php
error_reporting(0);	
session_start();
include 'koneksi.php';
$nama = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];	
$kode = $_POST['kode'];
$target = '../assets/gambar/bukti/'.$_POST['gambarlama'];
        if(file_exists($target)){
            unlink($target);
        }
move_uploaded_file($file_tmp, '../assets/gambar/bukti/'.$nama);
$query = mysqli_query($koneksi,"update pemesanan set gambar_tf='$nama' where kode='$kode'");
echo "<script>window.alert('Perubahan Berhasil Disimpan'); window.location=('../pesanan-saya.php')</script>";
?>