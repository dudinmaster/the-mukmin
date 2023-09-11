<?php
$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="the_mukmin";

// Create connection
$conn= mysqli_connect($db_host, $db_username, $db_pass,$db_name);

// or die("Could not connect to mySQL")

// Check connection
if($conn == true) {
    echo "";
}else echo "Koneksi Gagal Karena: Username atau password yang anda masukkan salah !";
?>