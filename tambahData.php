<?php
// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "arkademy");

    if (isset($_POST["submit"])){
        
        // ngambil data dari form
        $nama = $_POST["nama"];
        $keterangan = $_POST["keterangan"];
        $harga = $_POST["harga"];
        $jumlah = $_POST["jumlah"];

        // query insert data
        $query = "INSERT INTO produk 
                    VALUES
                    ('$nama', '$keterangan', '$harga', '$jumlah')
                ";
        mysqli_query($conn, $query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">nama produk (buah): </label>
                <input type="text" name="nama" id="nama"> <?php //name disesuaikan dengan field pada database?>
            </li>
            <li>
                <label for="keterangan">keterangan : </label>
                <input type="text" name="keterangan" id="keterangan"> <?php //name disesuaikan dengan field pada database?>
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga"> <?php //name disesuaikan dengan field pada database?>
            </li>
            <li>
                <label for="jumlah">jumlah : </label>
                <input type="text" name="jumlah" id="jumlah"> <?php //name disesuaikan dengan field pada database?>
            </li>
            <li>
                <button type="submit" name="submit">tambah</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>