<?= $this->extend('layout/homepage'); ?>

<?= $this->section('content'); ?>

<section class="hero">
    <div class="h-100 d-flex align-items-center" style="margin-top: 10%;">
        <div class="container">
            <div class="row text-center text-lg-start">
                <h3 class="text-center">Login</h3>
                
                <?php if (session()->getFlashdata('login_failed')) : ?>
                    <div class="row">
                        <div class="alert alert-danger col-lg-4 mx-auto" role="alert">
                            <?= session()->getFlashdata('login_failed'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- start right side --> 
                <div class="
                col-12 col-sm-6   
                text-black
                align-self-center
                order-1 order-lg-1 my-5 my-lg-0
                ">
                    
                    <div class="card" id="card">
                    
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('login/proses-login') ?>">
                            <?= csrf_field() ?>
                                <div class="form-group row mb-3 ">
                                    <label for="email" class="col-md-4 col-form-label text-md-right text-start">Email Address</label>
                                    <div class="#">
                                        <input placeholder="contoh@gmail.com"  type="email" class="form-control <?php if ($validation->hasError('email')) echo 'is-invalid' ?>" id="email" name="email" value="<?= old('email') ?>" required autocomplete="email" autofocus>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right text-start">Password</label>

                                    <div class="#">
                                    <input placeholder="password" type="password"
                                            class="form-control <?php if ($validation->hasError('email')) echo 'is-invalid' ?>" 
                                            id="password" name="password" required autocomplete="current-password">

                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password') ?>
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    
                                    <div class="col-12 col-sm-6 text-start">
                                        <input class="btn btn-primary text-start" type="button" name="submit" value="Show" id="show" onclick="ShowPassword()" />
                                        <input class="btn btn-primary text-start" type="button" style="display: none" id="hide" value="Hide" onclick="HidePassword()" />

                                    </div>
                                   
                                </div>

                                
                                <div class="form-group row mb-3">
                                    <div class="# text-center">
                                        <button type="submit" class="btn btn-primary" id="button">
                                            Login
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="#">
                                        <div class="row ">
                                            <div class="col-12 text-center">
                                                <span>Belum Punya Akun?</span> <a class="btn btn-link" href="<?= base_url('registrasi') ?>">
                                                    Daftar di sini
                                                </a>
                                            </div>
                                        </div>
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
    if (document.getElementById("password-confirm").value != "") {
      document.getElementById("password-confirm").type = "text";
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
    if (document.getElementById("password-confirm").type == "text") {
      document.getElementById("password-confirm").type = "password";
      document.getElementById("show").style.display = "block";
      document.getElementById("hide").style.display = "none";
    }
  }

</script>


<?= $this->endSection();?>
