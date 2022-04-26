<?php
include_once("koneksidb.php");
$sql = "CREATE TABLE Penjualan_Sepatu(
    Kode_Barang Varchar(6) PRIMARY KEY,
    Jumlah_Pesanan Varchar(25),
    Nama_Pembeli Varchar(40),
    Ukuran Varchar(50),
    Alamat Varchar(50)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "pembuatan tabel sukses";
}else{
    echo "pembuatan tabel gagal";
}