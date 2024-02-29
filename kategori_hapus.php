<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategoribuku WHERE KategoriID=$id");
?>

<script>
    location.href = "index.php?page=kategori";
    alert('hapus data berhasil');
    

</script>