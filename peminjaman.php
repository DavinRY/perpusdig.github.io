<h1 class="display-5 mt-4 text-center">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="card">
    <div class="card-body">
<div class="rows">
    <div class="col-md-12">
        <a href="?page=peminjaman_tambah"  class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Peminjaman</a><br>
        <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID WHERE peminjaman.UserID=" . $_SESSION['user']['UserID'] );
                while($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['Username']; ?></td>
                <td><?php echo $data['Judul']; ?></td>
                <td><?php echo $data['TanggalPeminjaman']; ?></td>
                <td><?php echo $data['TanggalPengembalian']; ?></td>
                <td><?php echo $data['StatusPengembalian']; ?></td>
                <td>
                    <a href="?page=peminjaman_edit&&id=<?php echo $data['PeminjamanID']; ?>" class="btn btn-info">Ubah</a>
                    <a onclick="return confirm('Are you sure you deleted the data?');" href="?page=peminjaman_hapus&&id=<?php echo $data['PeminjamanID']; ?>" class="btn btn-dark grey">Hapus</a>
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
    </div>
</div>