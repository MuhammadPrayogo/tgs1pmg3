<?php
session_start();
?>

<html>
<head>
<title> Menu </title>
</head>
<body> 
<ul>
	<?php
	$level =$_SESSION['level']=='user';
	if($level){
	?>
	<h2> Selamat datang Pengguna </h2>
	<li><a href="view_barang.php"> Lihat Daftar Barang </a></li>
	<?php }else{ ?>
	<h2> Selamat datang Tuan Administrator </h2>
	<li><a href="view_anggota.php">Lihat Daftar Anggota </a></li>
	<li><a href="view_kategori.php">Lihat Daftar Kategori </a></li>
	<li><a href="view_barang.php"> Lihat Daftar Barang </a></li>
	<?php } ?>
    <li><a href="keluar.php"> Keluar </a></li>
	</ul>
</body>
</html>