<?php include "config.php"; ?>

<!-- Activities Start -->
<div class="container-fluid activities py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Dzikir & Doa</p>
                    <h1 class="display-3">Daftar Dzikir & Doa</h1>
                </div>

                <?php 
                    $sql = "select * from daftardoa" ; 
                    $result = mysqli_query($conn,$sql);


                ?>
                <div class="row g-4">
                    <?php  while($row = mysqli_fetch_assoc($result)) { 
                        $trim_text = substr($row['isi_konten'],0,350);    
                    ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-mosque fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4><?= $row['judul'];?></h4>
                                <?php
                                $id = $row['id'];
                                ?>
                                <p class="mb-4"><?php echo $trim_text . '...' ;?></p>
                                <a href="isi_konten.php?id=$id" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
            </div>
        </div>