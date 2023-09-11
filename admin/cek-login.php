<?php

include "../config.php" ;
session_start();

$username = $_POST["username"];
$password = md5($_POST["password"]);
$generate_password = md5($password);

$sql = "select * from admin where username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);
$queryCekLogin = mysqli_num_rows(mysqli_query($conn,$sql));

if($queryCekLogin == 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama'] = $row['nama'];
    header("Location: dashboard.php");
    // echo 'berhasil login' ;
}else{ $_SESSION['login_failed_message']='Login Gagal ! Silahkan cek username dan password anda'; header('Location: index.php');}