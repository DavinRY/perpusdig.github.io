<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamanID=$id");
?>

<script>
    location.href = "index.php?page=peminjaman";
    alert('hapus data berhasil');
    

</script>