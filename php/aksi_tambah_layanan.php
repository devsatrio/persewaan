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
$slug = strtolower(str_replace(' ','-',$nama));
$namaimg       = $_FILES['gambar']['name'];
$file_tmp   = $_FILES['gambar']['tmp_name'];	
move_uploaded_file($file_tmp, '../assets/gambar/layanan/'.$namaimg);
$query = mysqli_query($koneksi,"insert into layanan (nama,kategori,biaya,deskripsi,gambar,slug) 
values ('$nama','$kategori','$biaya','$deskripsi','$namaimg','$slug')");
echo "<script>window.alert('Data Berhasil Disimpan'); window.location=('../view/data_layanan.php')</script>";


?>