 <!-- Topbar start -->
 <div class="container-fluid fixed-top">
            <div class="container topbar d-none d-lg-block">
                <div class="topbar-inner">
                    <div class="row gx-0">
                        <div class="col-lg-7 text-start">
                            <div class="h-100 d-inline-flex align-items-center me-4">
                                <span class="fa fa-phone-alt me-2 text-dark"></span>
                                <a href="#" class="text-secondary"><span>+6285-1567-51432</span></a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center">
                                <span class="far fa-envelope me-2 text-dark"></span>
                                <a href="#" class="text-secondary"><span>Hoyoverse@gmail.com</span></a>
                            </div>
                        </div>
                        <div class="col-lg-5 text-end">
                            <div class="h-100 d-inline-flex align-items-center">
                                <span class="text-body">Ikuti kami:</span>
                                <a class="text-dark px-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="text-dark px-2" href=""><i class="fab fa-twitter"></i></a>
                                <!-- <a class="text-dark px-2" href=""><i class="fab fa-linkedin-in"></i></a> -->
                                <a class="text-dark px-2" href=""><i class="fab fa-instagram"></i></a>
                                <!-- <a class="text-body ps-4" href=""><i class="fa fa-lock text-dark me-1"></i> Signup/login</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-3">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mb-0">THE<span class="text-color:success !important;">Mukmin</span> </h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav ms-lg-auto mx-xl-auto">

                        <?php 
                            // $path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH); 
                            // $slug=substr($path,strrpos($path,"/")+1); 
                            // echo "<h1>".$slug." <h1>";
                        ?>
                                
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
