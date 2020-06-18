<?php
    
    // koneksi database cara function
    require 'function.php';
    $nice = query("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    
    <table border="1" cellpadding='10'>
            <tr>
                <th>nama produk</th>
                <th>keterangan</th>
                <th>harga</th>
                <th>jumlah</th>
            </tr>
            
            <?php foreach ($nice as $nc) : ?> <?php // melakukan looping untuk mengakses database, $result ada di atas?>
                <tr>
                    <td><?= $nc["nama"]?></td> <?php // menggunakan array associative seperti di atas?>
                    <td><?= $nc["keterangan"]?></td>
                    <td><?= $nc["harga"]?></td>
                    <td><?= $nc["jumlah"]?></td>
                </tr>
            <?php endforeach; ?>
    </table>
    <a href="tambahData.php">Tambah Data</a>
    <br>
    <a href="hapusData.php?nama=<?= $row['nama']?>">Hapus Data</a>
    
</body>
</html>