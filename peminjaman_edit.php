<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
       <form method="post">
    <?php    

$id = $_GET['id'];

    if(isset($_POST['submit'])){
        $id_buku = $_POST['BukuID'];
        $id_user = $_SESSION['user']['UserID'];
        $tanggal_peminjaman = $_POST['TanggalPeminjaman'];
        $tanggal_pengembalian = $_POST['TanggalPengembalian'];
        $status_peminjaman = $_POST['StatusPengembalian']; // nama variabel sudah diperbaiki
        $query = mysqli_query($koneksi, "UPDATE peminjaman SET BukuID='$id_buku', UserID='$id_user', TanggalPeminjaman='$tanggal_peminjaman', TanggalPengembalian='$tanggal_pengembalian', Statuspengembalian='$status_peminjaman' WHERE PeminjamanID=$id");
    
        if ($query) {
            echo '<script>alert("Tambah Data Berhasil."); location.href="?page=peminjaman"</script>';
            # code...
        }  else {
            echo '<script>alert("Tambah Data Gagal!!!.");"</script>';
        }
    }    
    
    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman WHERE PeminjamanID = $id");
    $data = mysqli_fetch_array($query);

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
            <div class="col-md-2">Tanggal Peminjaman</div>
            <div class="col-md-8 mb-4">
               <input type="date" class="form-control" name="TanggalPeminjaman" value="<?php echo $data['TanggalPeminjaman'];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Tanggal Pengembalian</div>
            <div class="col-md-8 mb-4">
               <input type="date" class="form-control" name="TanggalPengembalian" value="<?php echo $data['TanggalPengembalian'];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Status Peminjaman</div>
            <div class="col-md-8 mb-4">
               <select name="StatusPengembalian" class="form-control" value="<?php echo $data['StatusPengembalian'];?>">
               <option value="dipinjam">Dipinjam</option>
               <option value="dikembalikan">Dikembalikan</option>
               </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8 mb-4">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="?page=peminjaman" class="btn btn-danger">Kembali</a></col-md-8>
                </div>
            
        </div>
       </form>

    </div>
</div>
    </div>
</div>