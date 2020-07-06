<!-- footer  -->
<?php include '_partials/header.php' ?>

<!-- content  -->
<section class="ftco-section-2 ftco-degree-bg">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row d-flex">
            <div class="img col-sm-12 col-lg-5 order-last mt-3" style="background-size:50%; background-attachment: relative; background-repeat:no-repeat; background-image: url('<?php echo $detail->photo ?>">
            </div>
            <div class="text col-lg-7 order-first ftco-animate">
                <div class="text-inner align-self-start">
                    <hr>
                    <hr>
                    <h3>Detail Laporan</h2>
                        <?php if ($detail->status == '1') {
                            $sts = "<div class='text-warning' style='font-weight: bold;'>Lapran Dikirim</div>";
                        } elseif ($detail->status == '2') {
                            $sts = "<div class='text-primary' style='font-weight: bold;'>Lapran Diproses</div>";
                        } elseif ($detail->status == '3') {
                            $sts = "<div class='text-success' style='font-weight: bold;'>Lapran Success</div>";
                        } elseif ($detail->status == '4') {
                            $sts = "<div class='text-danger' style='font-weight: bold;'>Lapran Ditolak</div>";
                        }; ?>
                        <p>
                            <?= $sts ?>
                        </p>
                        <p>Jenis Laporan :
                            <?= $detail->jenis_laporan ?>
                        </p>

                        <p>Alamat :
                            <?= $detail->alamat ?>
                        </p>
                        <p>Keterangan :
                            <?= $detail->keterangan ?>
                        </p>
                        <p>Tanggal :
                            <?= $detail->tanggal ?>
                        </p>
                        <hr>
                        <hr>
                        <p>SIPOR adalah aplikasi media untuk melaporkan permasalahan di Kota Bandung kepada pemerintah, pihak swasta ataupun saling berbagi informasi sesama warga masyarakat di lingkungan sekitarmu demi terciptanya Kota Bandung yang lebih baik. Laporan yang masuk melalui aplikasi SIPOR akan diteruskan ke pihak terkait dan tetap bisa dipantau perkembangannya melalui dashboard www.siporbandung.com</p>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- footer -->
<?php include '_partials/footer.php' ?>