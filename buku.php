<div class="text-center">
<h1 class="mt-4">Daftar Buku</h1>
</div>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <a href="?page=buku_tambah" class="btn btn-primary my-4">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Deskripsi</th>
                <th class="mx-3">Aksi</th>
            </tr>

            <?php  
            $i = 1;
            
            $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategoribuku on buku.KategoriID = kategoribuku.KategoriID");
            while ($data = mysqli_fetch_array($query)) {
                ?>

                <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['NamaKategori']; ?></td>
                <td><?php echo $data['Judul']; ?></td>
                <td><?php echo $data['Penulis']; ?></td>
                <td><?php echo $data['Penerbit']; ?></td>
                <td><?php echo $data['TahunTerbit']; ?></td>
                <td><?php echo $data['Deskripsi']; ?></td>
                <td class="text-center">
                    <a href="?page=buku_edit&&id=<?php echo $data['BukuID'];?>" class="btn btn-info m-2">Ubah</a>
                    <a href="?page=buku_hapus&&id=<?php echo $data['BukuID'];?>" class="btn btn-danger m-2">Hapus</a>

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