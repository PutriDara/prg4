<?php

$server="localhost";
$user="root";
$password="";
$database="pemrograman";


$koneksi=mysqli_connect($server,$user,$password,$database);

if ($koneksi) {
    echo "Koneksi Sukses!";
}else{
    echo "Koneksi Gagal";
}
  
  ?>