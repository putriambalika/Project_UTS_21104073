<?php
include_once("koneksidb.php");
$sql = "CREATE DATABASE Penjualan_Sepatu;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan database sukses";
}else{
    echo "Pembuatan database gagal";
}
mysqli_close($cnn);