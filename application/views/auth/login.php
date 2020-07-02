<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container mt-5">
        <div class="login-content">
            <div class="user-img col-12">
                <img class="float-right" src="<?= base_url('assets/'); ?>img/icon.jpeg" alt="">
            </div>
            <div class="login-form">
                <div class="text-center">
                    <h4 class="text-gray-900 mb-4">Aplikasi Pelaporan Kota Bandung</h4>
                </div>
                <div class="text-left">
                    <h1 class="h4 text-gray-900 mb-4">Login Admin </h1>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                    <div class="form-group  text-normal">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info btn-block btn--lg">Login</button>
                    </div>

                </form>
                <hr>
                <div class="register-link m-t-15 text-center">
                    <!-- <p><a style="color:black " href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a></p> -->
                    <p><a style="color:black " href="<?= base_url('main'); ?>">Back to Home</a></p>

                    <!-- <p>Belum punya akun? <a style="color:black" href="<?= base_url('auth/registration') ?>"> Registrasi disini</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>