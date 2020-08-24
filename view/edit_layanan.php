<?php
error_reporting(1);
session_start();
include '../php/koneksi.php';
if($_SESSION['username']==''){
    echo "<script>window.alert('Maaf, Anda Harus Login'); window.location=('../loginadm.php')</script>";
}else{
    if($_SESSION['akses']!='admin'){
        echo "<script>window.alert('Maaf, Anda tidak memiliki akses'); window.location=('../index.php')</script>";
    }
}
include 'layout/h.php';
include 'layout/n.php';
?>
<link rel="stylesheet" href="../assets/summernote/summernote-bs4.css">
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Layanan</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                </div>
                <div class="card-body">
                    <?php
                        $query = mysqli_query($koneksi,"select * from layanan where id='$_GET[id]'");
                        while($row=mysqli_fetch_assoc($query)) { ?>
                    <form action="../php/aksi_edit_layanan.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Nama Layanan</label>
                            <input type="text" class="form-control" value="<?=$row['nama']?>" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Kategori</label>
                            <select name="kategori" class="form-control">
                                <option value="Gedung" <?php if($row['kategori']=='Gedung'){echo "selected";}?>>Gedung</option>
                                <option value="Catering" <?php if($row['kategori']=='Catering'){echo "selected";}?>>Catering</option>
                                <option value="Dekorasi" <?php if($row['kategori']=='Dekorasi'){echo "selected";}?>>Dekorasi</option>
                                <option value="Lain-Lain" <?php if($row['kategori']=='Lain-Lain'){echo "selected";}?>>Lain-Lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Biaya</label>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Rp</span>
                                </div>
                                <input type="number" value="<?=$row['biaya']?>" required class="form-control"
                                    name="biaya" min="0" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Deskripsi</label>
                            <textarea name="deskripsi" class="textarea" rows="10"><?=$row['deskripsi']?></textarea>
                            <input type="hidden" name="gambar_lama" value="<?=$row['gambar']?>">
                            <input type="hidden" name="kode" value="<?=$row['id']?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Gambar Baru*</label><br>
                            <img src="../assets/gambar/layanan/<?=$row['gambar']?>" alt="..." class="img-thumbnail"
                                width="300px"><br><br>
                            <input type="file" class="form-control" name="gambar" accept="image/*">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button class="btn btn-danger" onclick="history.go(-1)" type="button">Kembali</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include'layout/f.php';
?>