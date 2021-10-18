<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from anggota");
?>

<table class="table-bordered" border="3">
    <tr>
        <td>No</td>
        <td>Id Anggota</td>
        <td>Nama</td>
        <td>Alamat</td>
</tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_anggota'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['alamat'];?></td>
</tr>

<?php }?>