<div class="text-center">
<h3 class="mt-4">Tambah Kategori Buku</h3>
</div>

<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">

    <?php 
    
    if(isset($_POST['submit'])){
        $kategori =$_POST['kategori'];
        $query = mysqli_query($koneksi, "INSERT INTO kategoribuku(NamaKategori) values('$kategori')");


        if ($query) {
            echo '<script>alert("Tambah Data Berhasil."); location.href="?page=kategori"</script>';
            # code...
        }  else {
            echo '<script>alert("Tambah Data Gagal!!!.");"</script>';
        }
    }
    
    ?>


        <div class="row p-4">
            <div class="col-md-2">Nama Kategori</div>
            <div class="col-md-8 mb-4"><input type="text" class="form-control" required name="kategori"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8 mb-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mx-1" name="submit" value="submit">Simpan</button>
        <button type="reset" class="btn btn-secondary mx-1">Reset</button>
        <a href="?page=kategori" class="btn btn-danger mx-1">Kembali</a></col-md-8>
                </div>
            
        </div>
       </form>

    </div>
</div>
    </div>
</div>