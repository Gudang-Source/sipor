<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> SIPOR Bandung <i class="icon-heart" aria-hidden="true"></i> by
                    <a href="#" target="_blank">SIPOR</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


<script src="<?= base_url('assets/home/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/aos.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('assets/home/') ?>js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets/home/') ?>js/jquery.timepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="<?= base_url('assets/home/') ?>js/google-map.js"></script>
<script src="<?= base_url('assets/home/') ?>js/main.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#detailModel', function() {
            let gambar = $(this).attr('data-gambar');
            let alamat = $(this).attr('data-alamat');
            let email = $(this).attr('data-email');
            let jenis = $(this).attr('data-jenis');
            let keter = $(this).attr('data-ket');
            let lati = $(this).attr('data-latt');
            let longi = $(this).attr('data-longi');
            let sts = $(this).attr('data-sts');
            let tgl = $(this).attr('data-tgl');
            let type = $(this).attr('data-type');

            $('#gbr').attr("src", "<?= base_url('assets/img/laporan/') ?>" + gambar);
            $('#alamat').text(alamat);
            $('#email').text(email);
            $('#jenis').text(jenis);
            $('#ket').text(keter);
            $('#latt').text(lati);
            $('#longi').text(longi);
            $('#sts').text(sts);
            $('#tgl').text(tgl);
            $('#type').text(type);
        });

    });
</script>
</body>

</html>