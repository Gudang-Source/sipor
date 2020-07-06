<!-- Begin Page Content -->
<section class="content mb-5 mt-5">
    <div class="container-fluid">
        <div class="row">

            <?php
            $Laporan = $this->db->query('SELECT * FROM laporan');
            $user = $this->db->query("SELECT * FROM user");
            $pesan = $this->db->query("SELECT * FROM contact");
            ?>


            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner py-3">
                        <h3 class="ml-3 text-light"><?= $Laporan->num_rows(); ?></h3>
                        <p class="ml-3 text-light">Laporan Masuk</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner py-3">
                        <h3 class="text-light ml-3"><?= $user->num_rows(); ?></h3>
                        <p class="text-light ml-3">Admin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner py-3">
                        <h3 class="text-light ml-3"><?= $pesan->num_rows(); ?></h3>
                        <p class="text-light ml-3">Pesan Masuk</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</div>