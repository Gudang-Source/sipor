<!-- header  -->
<?php include '_partials/header.php' ?>

<section class="ftco-section-parallax ftco-degree-bg">
    <div class="parallax-img d-flex align-items-center">
        <div class="container mt-5">
            <h2 class="mb-4" style="color: white;">Data laporan
                <strong class="typewrite" data-period="4000" data-type='[ "Kesehatan.", "Lingkungan.", "Fasilitas Umum."]'>
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