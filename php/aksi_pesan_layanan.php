<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include 'koneksi.php';
$kodeuser = $_SESSION['id'];
$tanggalpesan = $_POST['tglpesan'];
$tanggalselesaipesan = $_POST['tglselesaipesan'];
$tanggal_buat = date('Y-m-d');
$status = 'Menunggu Konfirmasi';
$pesan_penyewa = $_POST['keterangan'];

//---------------------------------------------------------------------------------------------
$query = mysqli_query($koneksi, "select max(kode) as kodeTerbesar FROM pemesanan");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "TRS";
$kodeBarang = $huruf . sprintf("%03s", $urutan);

//---------------------------------------------------------------------------------------------
$datetime1 = strtotime($datatanggal1[0]);
$datetime2 = strtotime($datatanggal2[0]);
$now = strtotime(date('y-m-d'));
$datatanggal1 = explode('/',$tanggalpesan);
$datatanggal2 = explode('/',$tanggalselesaipesan);
if($now > $datetime1 || $now > $datetime2){
    echo "<script>window.alert('Maaf, inputan tanggal pesan anda tidak valid'); window.location=('../tambah-pesanan.php')</script>";
}else{
    
    if($datetime2 < $datetime1){
        echo "<script>window.alert('Maaf, inputan tanggal pesan anda tidak valid'); window.location=('../tambah-pesanan.php')</script>";
    }else{
        if($datatanggal1[0]==$datatanggal2[0]){
            $lamanya = 1;
        }else{
            $secs = $datetime2 - $datetime1;
            $days = $secs / 86400;
            $lamanya = $days+1;
        }
        //---------------------------------------------------------------------------------------------
        $query = mysqli_query($koneksi,"insert into pemesanan (kode,id_pengguna,tanggal_pesan,tanggal_sewa,tanggal_selesai_sewa,lama_pesan,pesan_penyewa,status) 
        values ('$kodeBarang','$kodeuser','$tanggal_buat','$tanggalpesan','$tanggalselesaipesan','$lamanya','$pesan_penyewa','$status')");
        $kodepemesanan = mysqli_insert_id($koneksi);

        //---------------------------------------------------------------------------------------------
        $datagedung = mysqli_query($koneksi, "select * FROM layanan where id='$_POST[gedung]'");
        $gedung = mysqli_fetch_array($datagedung);
        $subtotal_all = 0;
        $totalgedung = $gedung['biaya']*$lamanya;
        $subtotal_all += $totalgedung;
        $querygedung = mysqli_query($koneksi,"insert into pemesanan_detail (id_pemesanan,id_layanan,lama_pesan,harga,subtotal) 
        values ('$kodepemesanan','$_POST[gedung]','$lamanya','$gedung[biaya]','$totalgedung')");

        //---------------------------------------------------------------------------------------------
        if($_POST['catering']!='Tidak Memesan'){
            $datacatering = mysqli_query($koneksi, "select * FROM layanan where id='$_POST[catering]'");
            $cat = mysqli_fetch_array($datacatering);
            $totalcatering = $cat['biaya'];
            $subtotal_all += $totalcatering;
            $querycatering = mysqli_query($koneksi,"insert into pemesanan_detail (id_pemesanan,id_layanan,lama_pesan,harga,subtotal) 
            values ('$kodepemesanan','$_POST[catering]','$lamanya','$cat[biaya]','$totalcatering')");
        }

        //---------------------------------------------------------------------------------------------
        if($_POST['dekor']!='Tidak Memesan'){
            $datadekor = mysqli_query($koneksi, "select * FROM layanan where id='$_POST[dekor]'");
            $dek = mysqli_fetch_array($datadekor);
            $totaldekor = $dek['biaya'];
            $subtotal_all += $totaldekor;
            $querydekor = mysqli_query($koneksi,"insert into pemesanan_detail (id_pemesanan,id_layanan,lama_pesan,harga,subtotal) 
            values ('$kodepemesanan','$_POST[dekor]','$lamanya','$dek[biaya]','$totaldekor')");
        }

        //---------------------------------------------------------------------------------------------
        if($_POST['lain']!='Tidak Memesan'){
            $datalain = mysqli_query($koneksi, "select * FROM layanan where id='$_POST[lain]'");
            $lain = mysqli_fetch_array($datalain);
            $totallain = $lain['biaya'];
            $subtotal_all += $totallain;
            $querylain = mysqli_query($koneksi,"insert into pemesanan_detail (id_pemesanan,id_layanan,lama_pesan,harga,subtotal) 
            values ('$kodepemesanan','$_POST[lain]','$lamanya','$lain[biaya]','$totallain')");
        }

        //---------------------------------------------------------------------------------------------
        $queryfinal = mysqli_query($koneksi,"update pemesanan set total='$subtotal_all' where id='$kodepemesanan'");
        echo "<script>window.alert('Data Berhasil Disimpan'); window.location=('../pesanan-saya.php')</script>";
    }
}?>