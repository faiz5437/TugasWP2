<?php

$sever = "localhost";
$user = "root";
$pass = "password";
$db = "wpa_inventori";

$conn = new mysqli($sever,$user,$pass,$db);

// if($conn->connect_error){
//     echo "Koneksi gagal ".$conn->connect_error;
// }else{
//     echo "koneksi berhasil";
// }