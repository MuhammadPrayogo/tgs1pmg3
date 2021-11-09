<?php
include("koneksi.php");
if(isset($_POST['SAVE'])) {
$query_edit=mysqli_query($koneksi,"update anggota set
    id_anggota='".$_POST['Id Anggota']."',
    nama='".$_POST['Nama']."',
    alamat='".$_POST['Alamat']."',
    WHERE id_anggota ='".$_POST['id_anggota']."'");
if($squery_edit) {
    header("location:view_anggota.php");
}else{
    echo mysqli_error();
}
}

$tampil=mysqli_query($koneksi,"select * from anggota where id_anggota='".$_GET['id_anggota']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <input type="hidden" name="id_anggota" value="<? echo $hasil_data['id_anggota'];?>">
    <tr>
        <td>Id Anggota</td>
        <td><input type="text" name="id_anggota" class="form-control" value="<?php echo $hasil_data['id_anggota'];?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" class="form-control" value="<?php echo $hasil_data['alamat'];?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="rubah data" name="save"></td>
    </tr>
</table>
</form>