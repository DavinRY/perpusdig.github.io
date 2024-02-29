<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasanbuku WHERE UlasanID=$id");
?>

<script>
    location.href = "index.php?page=ulasan";
    alert('hapus data berhasil');
    

</script>