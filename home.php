<div>
<h2 class="mt-4">Selamat Datang di Perpustakaan Digital, <?php
 echo $_SESSION['user']['NamaLengkap']
?>  </h2>
</div>

<div class="mt-4">
    <h3> Total Kategori = <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategoribuku"));?></h3>
</div>

<div class="mt-4">
    <h3> Total Buku = <?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));?></h3>
</div>
