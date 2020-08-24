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
    <h1 class="h3 mb-4 text-gray-800">Data Layanan</h1>
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
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th class="text-right">Biaya</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i =1;
                            $query = mysqli_query($koneksi,"select * from layanan order by id desc");
                            while($row=mysqli_fetch_assoc($query)) { ?>
                            <tr class="gradeX">
                                <td class="text-center">
                                    <?php echo $i++;?>
                                </td>
                                <td>
                                    <?php echo $row['nama'];?>
                                </td>
                                <td>
                                    <?php echo $row['kategori'];?>
                                </td>
                                <td class="text-right">
                                <?php echo "Rp. ".number_format($row['biaya'],0,',','.'); ?>
                                </td>
                                <td class="text-center">
                                    <img src="../assets/gambar/layanan/<?=$row['gambar']?>" alt="..." width="150px;" class="img-thumbnail">
                                    <?php echo $row['alamat'];?>
                                </td>
                                <td class="text-center">
                                    <a href="edit_layanan.php?id=<?php echo $row[id];?>" class="btn btn-mini btn-primary">edit</a>
                                    <a href="../php/aksi_hapus_layanan.php?id=<?php echo $row[id];?>"
                                        class="btn btn-mini btn-danger" onclick="return confirm('Hapus data ?')">hapus
                                    </a>
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
include'layout/f_tabel.php';
?>