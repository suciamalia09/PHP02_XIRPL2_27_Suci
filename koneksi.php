<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_buku";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn){
        echo "";
    }else{
        echo "koneksi gagal";
    }
?>
