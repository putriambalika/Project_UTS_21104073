<?php
    if(isset($_POST['txKodeBarang'])){
    include_once ("koneksidb.php");
    $KodeBarang =$_POST['txKodeBarang'];
    $JumlahPesanan =$_POST["txJumlahPesanan"];
    $NamaPembeli =$_POST["txNamaPembeli"];
    $Ukuran = $_POST["txUkuran"];
    $Alamat = $_POST["txAlamat"];

    $sql = "INSERT INTO Penjualan_Sepatu(Kode_Barang,Jumlah_Pesanan,Nama_Pembeli,Ukuran,Alamat) Values('$KodeBarang','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert data gagal<br>";
    }
}else{
    
    header("location: Insertdatastok.php");
    
   // echo '<script>window.location.href="index.php"</script>';
}

