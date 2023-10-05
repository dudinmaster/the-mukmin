<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>THEMukmin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>



<!-- Topbar start -->
<div class="container-fluid sticky-lg-top bg-white shadow">
    <nav class="navbar navbar-expand-lg">
        <a href="index.php" class="navbar-brand">
            <h1 class="mb-0">THE<span style="color: #50C878 !important;">Mukmin</span> </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav ms-lg-auto mx-xl-auto">
                <a href="index.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Beranda</a>
                <a href="tentang-kami.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'tentang-kami.php' ? 'active' : ''; ?>">Tentang Kami</a>
                <a href="dzikir-doa.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'dzikir-doa.php' ? 'active' : ''; ?>">Dzikir & Doa</a>
                <a href="testimoni.php" class="nav-item nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'testimoni.php' ? 'active' : ''; ?>">Testimoni</a>
            </div>
            <a href="contact.html" class="nav-item nav-link">Kontak</a>
        </div>
        <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Donasi</a>
    </nav>
</div>
    
<!-- Topbar End -->

<!-- Hero Start -->
<?php
include "config.php";
$juduldoa = $_GET['judul'];
$sql = "select * from daftardoa Where judul='$juduldoa'";
$result = mysqli_query($conn, $sql);
?>
<div class="hero-header-inner animated zoomIn">
    <?php $row = mysqli_fetch_array($result);
    ?>
    <div class="p-5 text-center bg-image rounded-3" style="
                        background-image: url('img/testt-1.jpg');
                        height: 200px;">
        <div class="isikonten-text">
            <h1 class="display-5 text-dark text-center py-3"><?= $row['judul']; ?></h1>
        </div>
    </div>

</div>
<!-- Hero End -->

<!-- About Satrt -->
<div class="row g-4">
    <div class="mb-1 mb">
        <p style="text-alignment:center;margin-left:25%;margin-right:25%;margin-top:35px;"><?= $row['isi_konten']; ?></p>
    </div>
</div>


<div class="container text-center bg-primary py-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="row g-4 align-items-center">
        <div class="col-lg-2">
            <i class="fa fa-mosque fa-5x text-white"></i>
        </div>
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="mb-0">Cek Doa & Dzikir Bermanfaat Lainnya</h1>
        </div>
        <div class="col-lg-3">
            <a href="tentang-kami.php" class="btn btn-light py-2 px-4">Selengkapnya</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card" style="border-color:#f1c152;">
                <div class="p-3">
                    <h6>Comments</h6>
                </div>
                <?php
                    $sql = "SELECT komentar.*,user.nama
                    FROM komentar INNER JOIN user ON user.id= komentar.id_user WHERE komentar.status='approved' "; 
                    $result = mysqli_query($conn,$sql);
                ?>
                <div class="mt-2">
                <?php  while($row = mysqli_fetch_assoc($result)) { 
                    ?>
                    <div class="d-flex flex-row p-3"> <img src="img/profilepic.png" width="40" height="40" class="rounded-circle mr-3">
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row align-items-center"> <span style="margin-left: 10px" class="mr-2"><?=$row['nama'];?></span> </div> <small><?=$row['date_created_add']?></small>
                            </div>
                            <p style="margin-left: 10px" class="text-justify comment-text mb-0"><?=$row['isi_komentar'];?></p>
                            <div class="d-flex flex-row user-feed"></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card" style="border-color:#f1c152;padding-left:20px;padding-top:20px;padding-bottom:20px;">
            <h3>Kirim Komentar</h3>
                <form action="proseskomentar.php" method="POST" class="row g-3" >
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-25" name="nama">
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control w-25" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control w-25" name="website">
                    </div>
                    <div class="col-md-12">
                        <label for="komentar" class="form-label">Komentar</label>
                        <textarea name="komentar" id="komentar" class="form-control w-25" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

