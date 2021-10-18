<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");
?>

<table class="table-bordered" border="3">
    <tr>
        <td>No</td>
        <td>Id Kategori</td>
        <td>Nama</td>
</tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_kategori'];?></td>
        <td><?php echo $tampil['nama'];?></td>
</tr>

<?php }?>