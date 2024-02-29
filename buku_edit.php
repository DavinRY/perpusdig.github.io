<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">

    <?php 

    $id = $_GET['id'];
    
    if(isset($_POST['submit'])){
        $id_kategori = $_POST['KategoriID'];
        $judul = $_POST['judul'];
        $penulis =$_POST['penulis'];
        $penerbit =$_POST['penerbit'];
        $tahunterbit =$_POST['tahunterbit'];
        $deskripsi = $_POST['deskripsi'];
        $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit', deskripsi='$deskripsi' WHERE BukuID=$id");


        if ($query) {
            echo '<script>alert("Update Data Berhasil."); location.href="?page=buku"</script>';
            # code...
        }  else {
            echo '<script>alert("Update Data Gagal!!!.");"</script>';
        }
    }
    
    $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE BukuID = $id");
    $data = mysqli_fetch_array($query);

    ?>




        <div class="row">
            <div class="col-md-2">Kategori</div>
            <div class="col-md-8 mb-4">
                <select name="KategoriID" class="form-control">
                <?php 
                    $kat = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                    while($kategori = mysqli_fetch_array($kat)) {
                        ?>
                        <option <?php if($kategori['KategoriID'] == $data['KategoriID']) echo 'selected'; ?> value="<?php echo $kategori['KategoriID']; ?>"><?php echo $kategori['NamaKategori']; ?></option>
                        <?php
                    }                
                ?>


                </select>
            
            
        </div>

        <div class="row">
            <div class="col-md-2">Judul</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" value="<?php echo $data['Judul'];?>" name="judul"></div>
        </div>

        <div class="row">
            <div class="col-md-2">Penulis</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" value="<?php echo $data['Penulis']; ?>" name="penulis"></div>
        </div>


        <div class="row">
            <div class="col-md-2">Penerbit</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" value="<?php echo $data['Penerbit']; ?>" name="penerbit"></div>
        </div>


        <div class="row">
            <div class="col-md-2">Tahun Terbit</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" value="<?php echo $data['TahunTerbit']; ?>" name="tahunterbit"></div>
        </div>

        <div class="row">
            <div class="col-md-2">Deskripsi</div>
            <div class="col-md-8 mb-4"><textarea name="deskripsi" class="form-control" rows="3"><?php echo $data['Deskripsi']; ?>"</textarea></div>
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