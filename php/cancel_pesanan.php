<?php
error_reporting(0);	
session_start();

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"update pemesanan set status='Dicancel' where id='$id'");
echo "<script>window.alert('Pesanan Telah Lunas'); window.location=('../pesanan-saya.php')</script>";


?>