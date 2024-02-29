<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">

    <?php 
    
    if(isset($_POST['submit'])){
        $kategoriid =$_POST['KategoriID'];
        $judul =$_POST['judul'];
        $penulis =$_POST['penulis'];
        $penerbit =$_POST['penerbit'];
        $tahunterbit =$_POST['tahunterbit'];
        $deskripsi = $_POST['deskripsi'];
        $query = mysqli_query($koneksi, "INSERT INTO buku(KategoriID, judul, penulis, penerbit, tahunterbit, deskripsi) values('$kategoriid', '$judul', '$penulis', '$penerbit', '$tahunterbit', '$deskripsi')");


        if ($query) {
            echo '<script>alert("Tambah Data Berhasil."); location.href="?page=buku"</script>';
            # code...
        }  else {
            echo '<script>alert("Tambah Data Gagal!!!.");"</script>';
        }
    }
    
    ?>


        <div class="row">
            <div class="col-md-2">Kategori</div>
            <div class="col-md-8 mb-4">
                <select name="KategoriID" class="form-control">
                <?php 
                    $kat = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                    while($kategori = mysqli_fetch_array($kat)) {
                        ?>
                        <option value="<?php echo $kategori['KategoriID']; ?>"><?php echo $kategori['NamaKategori']; ?></option>
                        <?php
                    }                
                ?>


                </select>
            
            
        </div>

        <div class="row">
            <div class="col-md-2">Judul</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" required name="judul"></div>
        </div>

        <div class="row">
            <div class="col-md-2">Penulis</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" required name="penulis"></div>
        </div>


        <div class="row">
            <div class="col-md-2">Penerbit</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" required name="penerbit"></div>
        </div>


        <div class="row">
            <div class="col-md-2">Tahun Terbit</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" required name="tahunterbit"></div>
        </div>

        <div class="row">
            <div class="col-md-2">Deskripsi</div>
            <div class="col-md-8 mb-4"><textarea class="form-control"  required name="deskripsi" rows="3"></textarea></div>
        </div>


        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8 mb-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mx-1" name="submit" value="submit">Simpan</button>
        <button type="reset" class="btn btn-secondary mx-1">Reset</button>
        <a href="?page=buku" class="btn btn-danger mx-1">Kembali</a></col-md-8>
                </div>
            
        </div>
       </form>

    </div>
</div>
    </div>
</div>