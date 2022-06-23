<?= $this->extend('layout/homepage'); ?>

<?= $this->section('content'); ?>
<!-- start section hero -->

<section class="hero">
    <div class="h-100 d-flex align-items-center">
        <div class="container" style="margin-top: 10%;">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h3 class="text-center">Form Registrasi</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <?php if (session()->getFlashdata('registrasi_sukses')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('registrasi_sukses'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row text-center text-lg-start">

                <!-- start right side -->
                <div class="
                col-12 col-sm-6   
                text-black
                align-self-center
                order-1 order-lg-1 my-5 my-lg-0
                ">

                    <div class="card" id="card">

                        <div class="card-body">
                            <form method="POST" action="<?= base_url('registrasi/simpan-registrasi') ?>">
                                <?= csrf_field() ?>
                                <div class="form-group row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-start">Nama Lengkap</label>
                                    <div class="#">
                                        <input placeholder="Nama Lengkap" type="text"
                                                class="form-control <?php if ($validation->hasError('name')) echo 'is-invalid' ?>"
                                                id="name"
                                                name="name"
                                                value="<?= old('name') ?>" required autocomplete="name" autofocus>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('name') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-start">E-Mail</label>

                                    <div class="#">
                                        <input placeholder="contoh@gmail.com" type="email"
                                               class="form-control <?php if ($validation->hasError('email')) echo 'is-invalid'?>"
                                               id="email"
                                               name="email"
                                               value="<?= old('email') ?>" required autocomplete="email">
                                        <div class='invalid-feedback'>
                                            <?= $validation->showError('email')?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-start">Password</label>

                                    <div class="#">
                                        <input placeholder="password" type="password"
                                               class="form-control <?php if ($validation->hasError('password')) echo 'is-invalid' ?>"
                                               id="password"
                                               name="password"
                                               value="<?= old('password') ?>" required autocomplete="new-password">

                                        <div class="invalid-feedback">
                                            <?= $validation->showError('password') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="password-confirm" class="col-md-8 col-form-label text-start">Konfirmasi Password</label>

                                    <div class="#">
                                        <input placeholder="ulangi password" type="password"
                                                class="form-control <?php if ($validation->hasError('konfirmasi_password')) echo 'is-invalid' ?>" 
                                                id="konfirmasi_password"
                                                name="konfirmasi_password"
                                                value="<?= old('konfirmasi_password') ?>" required autocomplete="new-password">
                                        <div class="invalid-feedback">
                                            <?= $validation->showError('konfirmasi_password') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-12 col-sm-6 text-start">
                                        <input class="btn btn-primary text-start" type="button" name="submit" value="Show" id="show" onclick="ShowPassword()" />
                                        <input class="btn btn-primary text-start" type="button" style="display: none" id="hide" value="Hide" onclick="HidePassword()" />


                                    </div>

                                </div>

                                <div class="form-group row ">
                                    <div class="text-center">
                                        <button id="button" type="submit" class="btn btn-primary">
                                            Daftar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end right side -->

                <!-- start left side -->
                <div class="
                col-12 col-sm-6
                order-0 order-lg-0
                ">
                <img src="img/beranda/login.png" alt="Hero illustration" class="img-fluid element-3" id="img-login" /><div class="row text-center"><a href='https://www.freepik.com' target="_blank" >Ilustrasi dari freepik.com</a></div>

                </div>
                <!-- end left side -->
            </div>
        </div>
    </div>
</section>
<!-- end section hero -->

<script>
function ShowPassword() {
    if (document.getElementById("password").value != "") {
      document.getElementById("password").type = "text";
      document.getElementById("show").style.display = "none";
      document.getElementById("hide").style.display = "block";
    }
    if (document.getElementById("konfirmasi_password").value != "") {
      document.getElementById("konfirmasi_password").type = "text";
      document.getElementById("show").style.display = "none";
      document.getElementById("hide").style.display = "block";
    }
  }
  
  function HidePassword() {
    if (document.getElementById("password").type == "text") {
      document.getElementById("password").type = "password";
      document.getElementById("show").style.display = "block";
      document.getElementById("hide").style.display = "none";
    }
    if (document.getElementById("konfirmasi_password").type == "text") {
      document.getElementById("konfirmasi_password").type = "password";
      document.getElementById("show").style.display = "block";
      document.getElementById("hide").style.display = "none";
    }
  }

</script>

<?= $this->endSection(); ?>