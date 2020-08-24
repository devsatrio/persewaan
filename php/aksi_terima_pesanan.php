<?php
error_reporting(0);	
session_start();

include 'koneksi.php';
$id = $_POST['kode'];
$keterangan = $_POST['keterangan'];
$query = mysqli_query($koneksi,"update pemesanan set status='Diterima',keterangan='$keterangan' where id='$id'");
echo "<script>window.alert('Pesanan Berhasil Diterima'); window.location=('../view/data_pesanan.php')</script>";


?>