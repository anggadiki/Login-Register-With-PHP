<?php

$host       = "localhost";
$user       = "root";
$pass       = "password";
$db         = "db_nasabah_bank";
$conn   = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    echo ("koneksi gagal");
}

?>