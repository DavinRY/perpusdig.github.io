<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE BukuID = $id");
?>

<script>
    location.href = "index.php?page=buku";
    alert('hapus data berhasil');
    

</script>