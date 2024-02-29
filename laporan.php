<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="card">
    <div class="card-body">
<div class="rows">
    <div class="col-md-12">
        <a href="cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>Cetak Data</a><br>
        <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on peminjaman.BukuID = peminjaman.BukuID");
                while($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['Username']; ?></td>
                <td><?php echo $data['Judul']; ?></td>
                <td><?php echo $data['TanggalPeminjaman']; ?></td>
                <td><?php echo $data['TanggalPengembalian']; ?></td>
                <td><?php echo $data['StatusPengembalian']; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</div>
    </div>
</div>
    </div>
</div>