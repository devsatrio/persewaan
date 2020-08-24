<?php
error_reporting(0);
session_start();
include '../php/koneksi.php';
if($_SESSION['username']==''){
    echo "<script>window.alert('Maaf, Anda Harus Login'); window.location=('../loginadm.php')</script>";
}else{
    if($_SESSION['akses']!='admin'){
        echo "<script>window.alert('Maaf, Anda tidak memiliki akses'); window.location=('../index.php')</script>";
    }
}
include 'layout/h_tabel.php';
include 'layout/n.php';
?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Pesanan</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">List Data</h6>
                    <div class="dropdown no-arrow">
                        <a href="tambah_layanan.php" class="btn btn-success">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered data-table" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Tgl Pesan</th>
                                <th>Pemesan</th>
                                <th class="text-center">Tgl Sewa</th>
                                <th class="text-right">Total</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i =1;
                            $query = mysqli_query($koneksi,"select pemesanan.*,pengguna.nama from pemesanan left join pengguna on pengguna.id = pemesanan.id_pengguna order by pemesanan.id desc");
                            while($row=mysqli_fetch_assoc($query)) { ?>
                            <tr class="gradeX">
                                <td class="text-center">
                                    <?php echo $i++;?>
                                </td>
                                <td>
                                    <?php echo $row['kode'];?>
                                </td>
                                <td>
                                    <?php echo $row['tanggal_pesan'];?>
                                </td>
                                <td>
                                    <?php echo $row['nama'];?>
                                </td>
                                <td>
                                    <?php echo $row['tanggal_sewa'];?> - <?=$row['tanggal_selesai_sewa']?>
                                </td>
                                <td class="text-right">
                                    <?php echo "Rp. ".number_format($row['total'],0,',','.'); ?>
                                </td>
                                <td class="text-center">
                                    <?=$row['status']?>
                                </td>
                                <td class="text-center">
                                    <?php if($row['status']=='Menunggu Konfirmasi') {?>
                                    <a href="../php/aksi_terima_pesanan.php?id=<?php echo $row[id];?>"
                                        class="btn btn-mini btn-primary" data-toggle="modal"
                                        data-target="#terimamodal<?=$row['id']?>">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <a href="#" class="btn btn-mini btn-info" data-toggle="modal"
                                        data-target="#cancelmodal<?=$row['id']?>">
                                        <i class="fa fa-ban"></i>
                                    </a>
                                    <?php }else if($row['status']=='Diterima'){
                                        if($row['gambar_tf']!=''){
                                        ?>
                                    <a href="../php/aksi_validasi_pesanan.php?id=<?php echo $row[id];?>"
                                        class="btn btn-mini btn-success"
                                        onclick="return confirm('Validasi Pembayaran ?')">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <?php }else{ echo "-";} ?>

                                    <?php }else if($row['status']=='Ditolak'){ ?>
                                    <a href="../php/aksi_hapus_pesanan.php?id=<?php echo $row[id];?>"
                                        class="btn btn-mini btn-danger" onclick="return confirm('Hapus data ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <?php }else{ ?>
                                    <a href="../php/aksi_hapus_pesanan.php?id=<?php echo $row[id];?>"
                                        class="btn btn-mini btn-danger" onclick="return confirm('Hapus data ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$querydua = mysqli_query($koneksi,"select pemesanan.*,pengguna.nama from pemesanan left join pengguna on pengguna.id = pemesanan.id_pengguna order by pemesanan.id desc");
while($rowdua=mysqli_fetch_assoc($querydua)) { ?>
<div class="modal fade" id="cancelmodal<?=$rowdua['id']?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cancel Pemesanan <?=$rowdua['kode']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/aksi_tolak_pesanan.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" rows="3" class="form-control"></textarea>
                        <input type="hidden" name="kode" value="<?=$rowdua['id']?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Tolak Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="terimamodal<?=$rowdua['id']?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terima Pemesanan <?=$rowdua['kode']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../php/aksi_terima_pesanan.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" rows="3" class="form-control"></textarea>
                        <input type="hidden" name="kode" value="<?=$rowdua['id']?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Terima Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
}
include'layout/f_tabeldua.php';
?>