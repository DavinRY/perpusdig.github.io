<div class="text-center">
<h1 class="mt-4">Ulasan Buku</h1>
</div>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-primary my-4">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr class="text-center">
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Ulasan</th>
                <th>Rating</th>
                <td>Aksi</td>
                
            </tr>

            <?php  
            $i = 1;
            
            $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku LEFT JOIN user on user.UserID = ulasanbuku.UserID LEFT JOIN buku on buku.BukuID = ulasanbuku.BukuID");
            while ($data = mysqli_fetch_array($query)) {
                ?>

                <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['Username']; ?></td>
                <td><?php echo $data['Judul']; ?></td>
                <td><?php echo $data['Ulasan']; ?></td>
                <td><?php echo $data['Rating']; ?></td>
                <td class="text-center">
                    <a href="?page=ulasan_edit&&id=<?php echo $data['UlasanID'];?>" class="btn btn-info m-2">Ubah</a>
                    <a href="?page=ulasan_hapus&&id=<?php echo $data['UlasanID'];?>" class="btn btn-danger m-2">Hapus</a>

                </td>
                </tr>
                <?php
            }
            ?>
            
            
        </table>

    </div>
</div>
    </div>
</div>