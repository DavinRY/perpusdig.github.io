<div class="container-fluid justify-content-center text-center">
<h1 class="my-4">Kategori Buku</h1>
</div>

<a href="?page=kategori_tambah" class="btn btn-primary mb-4">++ Tambah Data</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="text-center">Nama Kategori</th>
      <th scope="col" class="text-center">Aksi</th> 
    </tr> 
  </thead>
<?php

    $i = 1;

  $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku");  
            while ($data = mysqli_fetch_array($query)) {
                ?>
              

  <tbody>
    <tr>
    <td> <?php echo $i++; ?></td>
    <td><?php echo $data['NamaKategori']; ?></td>
      <td class="text-center">
      <a href="?page=kategori_edit&&id=<?php echo $data['KategoriID'];?>" class="btn btn-info mx-2">Ubah</a>
    <a href="?page=kategori_hapus&&id=<?php echo $data['KategoriID'];?>" class="btn btn-danger mx-2">Hapus</a>
    </td>
    </tr>

    <?php 
            }
            ?>
  </tbody>
</table>





