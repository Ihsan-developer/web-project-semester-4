<?= $this->extend('layout/kue'); ?>

<?= $this->section('content'); ?>
<?php if (session()->get('logged_in') === true) : ?>
    
    
    <!-- Content -->
   
    <!-- Start Section Carousel-->
    <section id="carousel" class="carousel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/kue/kue3.jpg" class="d-block w-100" height="650px" width="450px" alt="gambar 1">
                  <!--<div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>-->
              </div>
              <div class="carousel-item">
                  <img src="img/kue/kue2.jpg" class="d-block w-100" height="650px" width="450px" alt="gambar 2">
                  <!--<div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>-->
              </div>
              <div class="carousel-item">
                  <img src="img/kue/kue1.jpg" class="d-block w-100" height="650px" width="450px" alt="gambar 3">
                  <!--<div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>-->
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </a>
      </div>
  </section>
  <!-- End of Section Carousel -->

  <!--Menu Section-->
  <section id="Menu-Kue-kami" class="Menu">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2 data-aos="fade-up">Created with love and passion <br> for better taste cake</h2>
                <p class="lead" data-aos="fade-up">Kami menyediakan berbagai jenis kue yang manis dan lezat</p>
            </div>
        </div>

        <hr>
    </div>

      <!--Start of Section Product Cake-->
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
            <!-- product -->
            <div class="product-content product-wrap clearfix">
              <div class="row">
                  <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image"> 
                      <img src="img/kue/cake/tiramisu.jpg" alt="194x228" width="194" class="img-responsive"> 
                      <span class="tag2 hot">
                        <img class="hot-icon" src="img/kue/Crown.png"></img>
                      </span> 
                    </div>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="product-deatil">
                      <h5 class="name">
                        <a href="#">
                          Tiramisu <span>Cake</span>
                        </a>
                      </h5>
                      <p class="price-container">
                        <span>Rp.50.000</span>
                      </p>
                      <span class="tag1"></span> 
                  </div>
                  <div class="description">
                    <p>Tiramisù (Tiramesù) adalah kue keju khas Italia dengan taburan bubuk kakao di atasnya. Kue ini merupakan hidangan penutup yang dimakan dengan sendok, sehingga digolongkan ke dalam hidangan "al cucchiaio" ("dengan sendok") </p>
                  </div>
                  <div class="product-info smart-form">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6"> 
                        <a href="javascript:void(0);" class="btn btn-success" onclick="alert('Pembelian Sukses')">Beli Kue</a>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="rating">
                          <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                          <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                          <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                          <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                          <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end product -->
          </div>
  
          <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
            <!-- product -->
            <div class="product-content product-wrap clearfix">
              <div class="row">
                  <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image"> 
                      <img src="img/kue/cake/cookies.jpg" alt="194x228" width="194" class="img-responsive"> 
                      <span class="tag2 hot">
                        <img class="hot-icon" src="img/kue/Crown.png"></img>
                      </span> 
                    </div>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="product-deatil">
                      <h5 class="name">
                        <a href="#">
                          Kue Cookies <span>Cake</span>
                        </a>
                      </h5>
                      <p class="price-container">
                        <span>Rp.30.000</span>
                      </p>
                      <span class="tag1"></span> 
                  </div>
                  <div class="description">
                    <p>Kukis adalah makanan yang dipanggang atau dimasak yang biasanya kecil, datar, dan manis. Kukis biasanya terdiri dari tepung, gula, dan beberapa jenis minyak atau lemak. Kukis juga dapat dicampur dengan bahan-bahan lain. </p>
                  </div>
                  <div class="product-info smart-form">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6"> 
                        <a href="javascript:void(0);" class="btn btn-success" onclick="alert('Pembelian Sukses')">Beli Kue</a>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="rating">
                          <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                          <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                          <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                          <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                          <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end product -->
        </div>
      </div>
  
      <div class="row">
        <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
          <!-- product -->
          <div class="product-content product-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="product-image"> 
                    <img src="img/kue/cake/cupcake.jpg" alt="194x228" width="194" class="img-responsive"> 
                    <span class="tag2 hot" >
                      <img class="hot-icon" src="img/kue/Crown.png"></img>
                    </span> 
                  </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="product-deatil">
                    <h5 class="name">
                      <a href="#">
                        Cupcake <span>Cake</span>
                      </a>
                    </h5>
                    <p class="price-container">
                      <span>Rp.35.000</span>
                    </p>
                    <span class="tag1"></span> 
                </div>
                <div class="description">
                  <p>Cupcake adalah kue mungil yang dibuat dari adonan cake yang dicetak dalam paper cup atau cup kertas </p>
                </div>
                <div class="product-info smart-form">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <a href="javascript:void(0);" class="btn btn-success" onclick="alert('Pembelian Sukses')">Beli Kue</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="rating">
                        <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                        <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                        <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                        <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                        <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end product -->
        </div>
  
        <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
          <!-- product -->
          <div class="product-content product-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="product-image"> 
                    <img src="img/kue/cake/kue_coklat.jpg" alt="194x228" width="194" class="img-responsive"> 
                    <span class="tag2 hot">
                      <img class="hot-icon" src="img/kue/Crown.png"></img>
                    </span> 
                  </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="product-deatil">
                    <h5 class="name">
                      <a href="#">
                        Kue Coklat <span>Cake</span>
                      </a>
                    </h5>
                    <p class="price-container">
                      <span>Rp.65.000</span>
                    </p>
                    <span class="tag1"></span> 
                </div>
                <div class="description">
                  <p>Kue coklat merupakan kue yang berbahan dasar coklat yang banyak </p>
                </div>
                <div class="product-info smart-form">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <a href="javascript:void(0);" class="btn btn-success" onclick="alert('Pembelian Sukses')">Beli Kue</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="rating">
                        <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                        <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                        <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                        <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                        <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end product -->
      </div>
    </div>
    
    <div class="row">
    <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
      <!-- product -->
      <div class="product-content product-wrap clearfix">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="product-image"> 
                <img src="img/kue/cake/kue_pisang.jpg" alt="194x228" width="194" class="img-responsive"> 
                <span class="tag2 hot">
                  <img class="hot-icon" src="img/kue/Crown.png"></img>
                </span> 
              </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="product-deatil">
                <h5 class="name">
                  <a href="#">
                    Kue Pisang <span>Cake</span>
                  </a>
                </h5>
                <p class="price-container">
                  <span>Rp.55.000</span>
                </p>
                <span class="tag1"></span> 
            </div>
            <div class="description">
              <p>Kue pisang adalah kue yang berbahan dasar pisang dan memiliki cita rasa khas pisang </p>
            </div>
            <div class="product-info smart-form">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"> 
                  <a href="javascript:void(0);" class="btn btn-success" onclick="alert('Pembelian Sukses')">Beli Kue</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="rating">
                    <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                    <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                    <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                    <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                    <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
      <!-- product -->
      <div class="product-content product-wrap clearfix">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="product-image"> 
                <img src="img/kue/bread/sus.jpg" alt="194x228" width="194" class="img-responsive"> 
                <span class="tag2 hot">
                  <img class="hot-icon" src="img/kue/Crown.png"></img>
                </span> 
              </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="product-deatil">
                <h5 class="name">
                  <a href="#">
                    Kue Sus <span>Bread</span>
                  </a>
                </h5>
                <p class="price-container">
                  <span>Rp.40.000</span>
                </p>
                <span class="tag1"></span> 
            </div>
            <div class="description">
              <p>Kue sus adalah kue berbentuk bundar dengan rongga berisi fla, custard, atau daging. Kue sus dengan isi vla atau custard disajikan setelah didinginkan di lemari es, karena vla atau custard yang berbahan baku susu mudah menjadi basi</p>
            </div>
            <div class="product-info smart-form">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"> 
                  <a href="javascript:void(0);" class="btn btn-success" onclick="alert('Pembelian Sukses')">Beli Kue</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="rating">
                    <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                    <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                    <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                    <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                    <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end product -->
    </div>
  </div>
  </div>
  <!--End of Section Product Cake-->

</section>

<?php else : ?>
  <div class="alert alert-danger"style="margin-top: 20%; margin-bottom: 20%;" role="alert">
        Anda Harus login terlebih dahulu
  </div>

  <?php endif ?>

  <?= $this->endSection(); ?>
