<?php
include "../config.php";

$id = $_GET['id'];

$sql = "SELECT status FROM komentar WHERE id='$id'";
$checkstatus = mysqli_query($conn,$sql);

if($checkstatus='deny'){
    $ubah = "UPDATE komentar SET status='approved' WHERE id='$id'";
    $result =  mysqli_query($conn,$ubah);
}if($checkstatus='approved'){
    $ubah = "UPDATE komentar SET status='deny' WHERE id='$id'";
    $result =  mysqli_query($conn,$ubah);
}
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));

    if($result){
        echo "<h3>Status komentar berhasil dirubah";
            $yourURL="komentar.php";
            echo ("<script>location.href='$yourURL'</script>");
        }
    
        // echo nl2br("\n$first_name\n $last_name\n "
        //     . "$gender\n $address\n $email");
    else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
