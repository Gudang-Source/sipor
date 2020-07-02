<!-- header  -->
<?php include '_partials/header.php' ?>

<!-- content  -->
<section class="home-slider ftco-degree-bg">
    <div class="slider-item bread-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('main'); ?>">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span> Jl. Soekarno-Hatta No.378, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://1234567920">(022) 5224000</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@sipor.com</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Website</span> <a href="#">sipor.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('main/kirimPesan'); ?>">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Your Name">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subjek" class="form-control" placeholder="Subject">
                        <?= form_error('subjek', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6" id="map"></div>
        </div>
    </div>
</section>
<!-- footer  -->
<?php include '_partials/footer.php' ?>