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

     <!-- Hero Start -->
            <?php 
            $iddoa = $_GET['id'];
                $sql = "select * from daftardoa Where id='$iddoa'" ; 
                $result = mysqli_query($conn,$sql);
            ?>
            <div class="hero-header-inner animated zoomIn">
            <?php  $row = mysqli_fetch_array($result);   
                    ?>
                <div class="p-5 text-center bg-image rounded-3" style="
                        background-image: url('img/testt-1.jpg');
                        height: 200px;">
                    <div class="isikonten-text">
                        <h1 class="display-5 text-dark text-center py-3"><?= $row['judul'];?></h1>
                    </div>
                </div>
                
            </div>
    <!-- Hero End -->

    <!-- About Satrt -->
            <div class="row g-4">
                    <div class="mb-1 mb">
                        <p style="text-alignment:center;margin-left:25%;margin-right:25%;margin-top:35px;"><?= $row['isi_konten'];?></p>
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
            </div>
    </div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                <div class="comment mt-4 text-justify float-left">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="text-justify darker mt-4 float-right">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rob Simpson</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="comment mt-4 text-justify">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="darker mt-4 text-justify">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rob Simpson</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form">
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <label for="message">Message</label>
                        <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Subscribe me to the newlettter</label>
                    </div>
                    <div class="form-group">
                        <button type="button" id="post" class="btn">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>