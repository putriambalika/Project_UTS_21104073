<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel</title>
</head>
<body>
    
    <form method="POST" action="Insertdataform.php">
        Kode Barang<br>
        <input type="text" name="txKodeBarang"><br>    
        Jumlah Pesanan <br>
        <input type="text" name="txJumlahPesanan"><br>
        Nama Pembeli<br>
        <input type="text" name="txNamaPembeli"><br>
        Ukuran<br>
        <select name="txUkuran">
            <option value="38"> 38 </option>
            <option value="39"> 39 </option>
            <option value="40"> 40 </option>
            <option value="42"> 42 </option>
            <option value="44"> 44 </option>
        </select><br>
        Alamat
        <input type="text" name="txAlamat"><br>
        <br><br>
        <button type=submit> Simpan Data </button>
    </form>
</body>
</html>