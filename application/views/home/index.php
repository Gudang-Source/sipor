<!-- header  -->
<?php include '_partials/header.php' ?>

<!-- content  -->
<section class="home-slider ftco-degree-bg">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-3">
                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_un7IpQ.json" background="transparent" speed="1" style="width: 300px; height: 300px;" hover loop autoplay></lottie-player>
                </div>
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-4" style="color: white;">Mari Laporkan
                        <strong class="typewrite" data-period="4000" data-type='[ "Kesehatan.","Lingkungan.", "Fasilitas Umum.", "Pelanggaran." ]'>
                            <span class="wrap"></span>
                        </strong>
                    </h1>
                    <p style="color: white;">Kota Bandung masih punya banyak tantangan untuk dihadapi. Mulai dari masalah sampah, parkir liar, fasilitas umum yang rusak, dan lain-lain. Terbayang repotnya petugas pemerintah kalau harus menyisir semua daerah Kota Bandung. Mari sama-sama kita bangun Kota Bandung. <br>
                        <strong>Download Aplikasi SIPOR</strong> untuk Kota Bandung yang lebih baik</p>
                    <p style="color: black ;"><a href="#" class="btn btn-primary btn-outline-white px-4 py-3"><span class="ion-ios-play mr-2" style="color: black;"></span>
                            Download Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section-featured ftco-animate">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel owl-carousel">
                    <div class="item">
                        <a href="portfolio.html">
                            <img src="<?= base_url('assets/home/') ?>images/slider1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="portfolio.html">
                            <img src="<?= base_url('assets/home/') ?>images/slider2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="portfolio.html">
                            <img src="<?= base_url('assets/home/') ?>images/slider3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax ftco-degree-bg">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <h2 class="mb-4" style="color: white;">Data laporan
                <strong class=" typewrite" data-period="4000" data-type='[ "Kesehatan.", "Lingkungan.", "Fasilitas Umum."]'>
                    <span class="wrap"></span>
                </strong>
            </h2>
            <div class="row">
                <?php foreach ($laporan as $row) :
                    if ($row->status == '1') {
                        $sts = "<div class='text-warning' style='font-weight: bold;'>Dikirim</div>";
                    } elseif ($row->status == '2') {
                        $sts = "<div class='text-primary' style='font-weight: bold;'>Diproses</div>";
                    } elseif ($row->status == '3') {
                        $sts = "<div class='text-success' style='font-weight: bold;'>Success</div>";
                    } elseif ($row->status == '4') {
                        $sts = "<div class='text-danger' style='font-weight: bold;'>Ditolak</div>";
                    };
                ?>
                    <div class="col-md-3 ftco-animate">
                        <div class="blog-entry">
                            <img class="card-img-top" src="<?php echo $row->photo ?>" alt="Card image cap">
                            <div class="text p-4 d-block">
                                <div class="row">
                                    <div class="col-md-12"><?= $row->tanggal; ?></div>
                                    <div class="col-md-12">
                                        <div><?= $row->jenis_laporan; ?></div>
                                        <?= $sts ?>
                                    </div>
                                    <dibv class="col-md-6"></dibv>
                                    <div class="col-md-6 float-right">
                                        <a href="<?php echo site_url('main/detail/') . $row->id ?>">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- footer  -->
<?php include '_partials/footer.php' ?>