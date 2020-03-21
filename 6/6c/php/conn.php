<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "db_arkademy";

    $conn = new mysqli($host, $username, $password, $db);

    if($conn->connect_error){
        die("koneksi ke db gagal");
    }
?>