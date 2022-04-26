<?php
    
    include_once("koneksidb.php");
    $KodeBarang = "N25";
    $sql = "DELETE FROM Penjualan_Sepatu WHERE Kode_Barang='$KodeBarang';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "delete data sukses<br>";
    }else{
        echo "delete data gagal";
    }