<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from anggota");
?>
</br>
<a href="input_anggota.php" class="btn btn-danger">Tambah Anggota</a>
 <table class="table-bordered" border="3">
    <tr>
        <td>No</td>
        <td>Id Anggota</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td colspan="4">Action</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_anggota'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['alamat'];?></td>
        <td><a href="edit_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Edit</a></td>
        <td><a href="hapus_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Hapus</a></td>
    </tr>

<?php }?>
</table>