<!DOCTYPE html>
<html lang="id"> 

<head>
    <meta charset="utf-8" />
    <title> Beranda - Lorem Ipsum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Menikmati Manisnya Kue" />
    <meta name="keywords" content="Lazist, Cake, Food" />
    <meta name="author" content="Lazist Cake" />
    <meta name="email" content="Lazistcake@gmail.com" />
    <meta name="website" content="#" />
    <meta name="Version" content="v1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="img/kue/logo.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Icons -->
    <link href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Slider -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.min.css' integrity='sha512-06CZo7raVnbbD3BlY8/hGUoUCuhk8sTdVGV3m3nuh9i2R+UmkLbLRTE/My8TuJ3ALbDulhBObJQWtOUt0mXzNQ==' crossorigin='anonymous' />
    <!-- Main Css -->
    <link href="css/kue/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="css/kue/color.css" rel="stylesheet" id="color-opt">
    <link href="css/kue/index.css" rel="stylesheet"> 
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    </head>

<body>
    <!-- Navbar Start -->
    <header id="topnav" class="defaultscroll sticky nav-sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="#">
                    <img src="img/beranda/logo.png" class="l-dark" height="50" width="50" alt="">
                    <!--<img src="img" class="l-light" height="40" alt="">-->
                </a>
            </div>
            <div class="buy-button">
                <?php if (session()->get('logged_in') === true) : ?>
                    
                    <a href="<?= base_url('menu') ?>" >
                        <div class="btn btn-primary login-btn-primary"><span class="iconify" data-icon="fa6-solid:basket-shopping" data-width="25" data-height="25" style="color: white;"></span></div>
                        <div class="btn btn-light login-btn-light"></div>
                    </a>    

                    <a href="<?= base_url('logout') ?>">
                        <div class="btn btn-primary login-btn-primary">Keluar</div>
                        <div class="btn btn-light login-btn-light"></div>
                    </a>
                <?php else : ?>
                    <a href="<?= base_url('login') ?>">
                        <div class="btn btn-primary login-btn-primary">My Account</div>
                        <div class="btn btn-light login-btn-light"></div>
                    </a>
                
                <?php endif ?>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                <?php if (session()->get('logged_in') === true) : ?>
                    <?php if (session()->get('role') === 'penjual') : ?>
                        <li><a href="<?= base_url('home') ?>" class="sub-menu-item">Home</a></li>
                        
                        <li><a href="<?= base_url('kue') ?>" class="sub-menu-item">Data Kue</a></li>
                        <li><a href="<?= base_url('data-pelanggan') ?>" class="sub-menu-item">Data Pelanggan</a></li>
                        <li><a href="<?= base_url('data-pegawai') ?>" class="sub-menu-item">Data Pegawai</a></li>
                        <li><a href="<?= base_url('data-manager') ?>" class="sub-menu-item">Data Manager</a></li>
                        <li><a href="<?= base_url('data-cabang') ?>" class="sub-menu-item">Data Cabang</a></li>
                    <?php elseif (session()->get('role') === 'pelanggan') : ?>
                        <li><a href="<?= base_url('home') ?>" class="sub-menu-item">Home</a></li>
                        <li><a href="<?= base_url('menu') ?>" class="sub-menu-item">Menu</a></li>
                        
                    <?php else : ?>
                    
                    <?php endif ?>
                <?php else : ?>
                        <li><a href="<?= base_url('home') ?>" class="sub-menu-item">Home</a></li>
                        <li><a href="#about" class="sub-menu-item">Tentang Kami</a></li>
                        <li><a href="#contact" class="sub-menu-item">Hubungi kami</a></li>
                        <li><a href="#location" class="sub-menu-item">Lokasi</a></li>
                <?php endif ?>
                </ul>
                <!--end navigation menu-->
                <!--<div class="buy-menu-btn d-none">
                    <a href="#" target="_blank" class="btn btn-primary">Lorem</a>
                </div>-->
                <!--end login button-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Content -->
    <?= $this->renderSection('content') ?>


    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo-footer" style="color:white">
                        
                        Lazist Cake 
                    </a>
                    <p class="mt-4"><b>PT Lazist Cake Indo</b><br>Jl Lazist Cake RT 02 / RW 10<br>Jakarta, DKI jakarta, 59251</p>
                    <!--end icon-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head">Contact</h5>
                    <p class="mt-4">
                        <a style="color:#adb5bd" target="_blank" href="#">+62 588 3256 3253 (CS Lazist Cake)</a>
                        <a style="color:#adb5bd" target="_blank" href="mailto:lazist.cake@gmail.com">lazist.cake@gmail.com</a>
                    </p>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head">Social Media</h5>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a target="_blank" href="#" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="#" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="#" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="#" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="mb-0">© 2022 Lazist Cake || All Right Reserved </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!--Loading Screen Animation-->
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>  

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->
    <!-- javascript -->
      
    <!--Load Animation Script-->
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> <!-- SLIDER -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.min.js' integrity='sha512-eFH1e5TOppR2v/FrKk5FT/W9IHX25gKlrlTjIAuuG3pdDTMi3s8nR5PftWQ31fMpaF7P6NmlQXJjBwORWMLRLQ==' crossorigin='anonymous'></script>
    <script src="js/kue/tiny-slider-init.js"></script>
    <!-- Counter -->
    <script src="js/kue/counter.init.js"></script>
    <!-- Icons -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js' integrity='sha512-wDf6/iK+iu9N1zNvdOsL5/66HyMla4UHOkPkRYacvv9mSAD1S86XfrAvDFTX9S1FUzbwe9YOI11yOGALE8jQow==' crossorigin='anonymous'></script>
    <!-- Main Js -->
    <script src="js/kue/app.js"></script>
    <script src="js/kue/index.js"></script>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js' integrity='sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==' crossorigin='anonymous'></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom JS -->
    <!-- Custom JS -->
    <!-- High Charts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    
</body>

</html>