<?php
    include_once ("koneksidb.php");
    $KodeBarang ="N22";
    $JumlahPesanan ="2";
    $NamaPembeli ="Gunggus";
    $Ukuran ="42";
    $Alamat ="Jl.Tukad Pancoran No.15";

    $sql = "INSERT INTO Penjualan_Sepatu(Kode_Barang,Jumlah_Pesanan,Nama_Pembeli,Ukuran,Alamat) Values('$KodeBarang','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert data sukses<br>";
    }else{
        echo "Insert data gagal<br>";
    }
