<?php
include "config.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$website = $_POST['website'];
$komentar = $_POST['komentar'];

//echo $isi_konten ;

$result = mysqli_query($conn,"INSERT INTO user VALUES(NULL,'$nama','$email','$website')");
if($result){
    $last_id = mysqli_insert_id($conn);
    $queryKomentar = "INSERT INTO komentar VALUES(null,'$last_id',NOW(),'$komentar','deny')";
    $resultKomentar = mysqli_query($conn,$queryKomentar);
        if($resultKomentar){;?>
            <script>history.back()</script>
        <?php }else{echo "Error: " . $resultKomentar . "<br>" . mysqli_error($conn);}
}else{
    echo "Error: " . $result . "<br>" . mysqli_error($conn);
}

// $sqlkomentar = "INSERT INTO komentar VALUES('$nama','$email','$website')"
// $result = mysqli_query($conn, 'INSERT');
// if($result){
//     echo "<h3>Data baru berhasil disimpan";
//         $yourURL="daftar-doa.php";
//         echo ("<script>location.href='$yourURL'</script>");
//     }

//     // echo nl2br("\n$first_name\n $last_name\n "
//     //     . "$gender\n $address\n $email");
// else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($conn);
// }