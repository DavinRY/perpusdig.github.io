<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">

    <?php 
    
    if(isset($_POST['submit'])){
        $id_buku = $_POST['BukuID'];
        $id_user = $_SESSION['user']['UserID'];
        $ulasan =$_POST['ulasan'];
        $rating =$_POST['rating'];
        $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku(BukuID, userID, ulasan, rating) values('$id_buku', '$id_user', '$ulasan', '$rating')");


        if ($query) {
            echo '<script>alert("Tambah Data Berhasil."); location.href="?page=ulasan"</script>';
            # code...
        }  else {
            echo '<script>alert("Tambah Data Gagal!!!.");"</script>';
        }
    }
    
    ?>


        <div class="row">
            <div class="col-md-2">Buku</div>
            <div class="col-md-8 mb-4">
                <select name="BukuID" class="form-control">
                <?php 
                    $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                    while($buku = mysqli_fetch_array($buk)) {
                        ?>
                        <option value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul']; ?></option>
                        <?php
                    }                
                ?>


                </select>
            
            
        </div>
        </div>

        <div class="row">
            <div class="col-md-2">Ulasan</div>
            <div class="col-md-8 mb-4"><textarea class="form-control"  required name="ulasan" rows="3"></textarea></div>
        </div>

        <div class="row">
            <div class="col-md-2">Rating</div>
            <div class="col-md-8 mb-4"> <select name="rating" class="form-control">
           <?php
            for($i = 1; $i<=10; $i++){
                ?>
                <option><?php echo $i; ?></option>
                <?php
            }
            ?>
           
           </select>
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