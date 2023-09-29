<?php

include "../config.php";

$judul = $_POST['judul'];
$isi_konten = addslashes($_POST['isikonten']);

//echo $isi_konten ;

$sql = "INSERT INTO daftardoa VALUES(NULL,'$judul','default.png','$isi_konten')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "<h3>Data baru berhasil disimpan";
        $yourURL="daftar-doa.php";
        echo ("<script>history.href='$yourURL'</script>");
    }

    // echo nl2br("\n$first_name\n $last_name\n "
    //     . "$gender\n $address\n $email");
else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
