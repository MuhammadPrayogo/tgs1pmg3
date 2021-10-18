<?php

$server="localhost";
$user="root";
$database="phpshif";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);


if($koneksi){
echo "Koneksi Sukses";
}else{
echo "Koneksi gagal";
}

?>