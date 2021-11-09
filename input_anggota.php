<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into anggota(id_anggota,nama,alamat)
values(
'".$_POST['id_anggota']."',
'".$_POST['nama']."',
'".$_POST['alamat']."')");

if($query_input){
header('location:view_anggota.php');
}else{
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
		<td>Id Anggota</td>
		<td><input type="text" name="id_anggota" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>