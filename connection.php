<?php
ini_set('max_execution_time',0);//0=
session_start(); #Memulai Fitur Session

$servername = "localhost";
$username = "root";
$password = "";
$database = "underprice_store";

// membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Deklarasi public_url
function public_url($path='') {
    $root = 'http://localhost/underprice_id/';
    return $root . $path;
}

//Deklarasi cdn_url
function cdn_url($path='') {
    $root = 'http://localhost/underprice_id/images/product/';
    return $root . $path;
}

?>