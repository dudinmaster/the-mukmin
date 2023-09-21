<?php
include "../config.php";

$id_doa = $_POST['iddoa'];
$judul = $_POST['judul'];
$isi_konten =  addslashes($_POST['isikonten']); 

$sql = "UPDATE daftardoa SET judul='$judul',isi_konten='$isi_konten' WHERE id='$id_doa'";
$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));

    if($result){
        echo "<h3>Data baru berhasil diupdate";
            $yourURL="daftar-doa.php";
            echo ("<script>location.href='$yourURL'</script>");
        }
    
        // echo nl2br("\n$first_name\n $last_name\n "
        //     . "$gender\n $address\n $email");
    else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
