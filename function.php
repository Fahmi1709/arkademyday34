<?php
$mydata = mysqli_connect("localhost", "root","", "arkademy");

function query($query){
    global $mydata;
    $result = mysqli_query($mydata, $query);
    
    // variabel untuk menampung
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] =   $row;
    }

    return $rows;
}

function hapus($nama){
    global $mydata;
    mysqli_query($mydata, "DELETE FROM produk WHERE nama = $nama");
    return mysqli_affected_rows($mydata);
}
?>