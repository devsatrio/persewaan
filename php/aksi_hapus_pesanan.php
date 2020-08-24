<?php 
include 'koneksi.php';
$id = $_GET['id'];
$querysatu = mysqli_query($koneksi,"delete from pemesanan_detail where id_pemesanan='$id'");
$query = mysqli_query($koneksi,"delete from pemesanan where id='$id'");
echo "<script>window.alert('Data Berhasil Dihapus'); window.location=('../view/data_pesanan.php')</script>";
?>