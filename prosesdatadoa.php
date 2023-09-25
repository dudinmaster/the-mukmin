<!DOCTYPE html>
<html lang="en">
<?php include "config.php"; ?>
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
                <h1 class="mb-0">THE<span class="text-primary">Mukmin</span> </h1>
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
                </div>
            </nav>
        </div>
        </div>
    <!-- Topbar End -->


    <?php 
        $id_doa = $_GET['id']; 
        $sql = "SELECT * FROM daftardoa WHERE id='$id_doa'";
        $row = mysqli_fetch_array(mysqli_query($conn,$sql));
    ?>