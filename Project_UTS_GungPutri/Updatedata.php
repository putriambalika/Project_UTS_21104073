<?php

    include_once("koneksidb.php");
    $KodeBarang = "N22";
    $NamaPembeli = "Agus";
    $sql = "UPDATE Penjualan_Sepatu SET Nama_Pembeli='$NamaPembeli' WHERE Kode_Barang='$KodeBarang';";

    $hsl = mysqli_query($cnn,$sql);

    if($hsl){
        echo "update data sukses<br>";
    }else{
        echo "update data gagal";
    }