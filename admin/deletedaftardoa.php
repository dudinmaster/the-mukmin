<?php
include "../config.php";

$id_doa = $_GET['id'];

$sql = "DELETE FROM daftardoa WHERE id='$id_doa'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));

    if($result){
        echo "<h3>Data baru berhasil didelete";
            $yourURL="daftar-doa.php";
            echo ("<script>location.href='$yourURL'</script>");
        }
    
        // echo nl2br("\n$first_name\n $last_name\n "
        //     . "$gender\n $address\n $email");
    else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
