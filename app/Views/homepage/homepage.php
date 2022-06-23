<?= $this->extend('layout/homepage'); ?>

<?= $this->section('content'); ?>

    <!-- Content -->
   
    <!-- start section hero -->
    <section class="hero">
        <div class="h-100 d-flex align-items-center">
            <div class="container" id="hero">
                <div class="row text-center text-lg-start">
                    <!-- start left side -->
                    <div class="col-12 col-sm-6 text-blue align-self-center order-1 order-lg-0">
                        <h1 class="main-text fw-bold">
                            Lazist Cake<br />
                            Makes You Happy To Eat It<br />
                            
                        </h1>
                        <p class="fw-bold lh-lg mt-4">
                            Toko Kue & Roti Premium pertama di Indonesia. Terkenal dengan konsep dapur terbuka dan kelembutan kue & Roti serta rasanya.<br />
                        </p>
                    <!--   <form action="#"-->
                    <div class="row g-3 align-items-center">
                    <div class="col-12 col-lg-auto">
                        <!--<input
                        type="email"
                        id="email"
                        class="form-control"
                        placeholder="Mulai"
                        readonly
                        />-->
                        <a href="<?= base_url('menu') ?>">
                        <button type="submit" class="btn btn-primary" id="btn-hero">
                         Order Now
                        </button>
                        </a>
                    </div>
                    <div class="col-12 col-lg-auto text-center">
                        <!-- <a href="{{ url('/login') }}"><button type="submit" id="btn-hero"  class="btn btn-primary">
                        Lorem lorem
                        </button></a> -->
                    </div>
                    </div>
                <!-- </form>-->
                    </div>
                    <!-- end left side -->

                    <!-- start right side -->
                    <div class="col-12 col-sm-6 order-0 order-lg-1 my-5 my-lg-0">
                        <img src="img/beranda/ilustrasi.png" id="img-hero" alt="Hero illustration" class="img-fluid" />
                    </div>
                    <!-- end right side -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section hero -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>About Us</h2>
          </div>
  
          <div class="row content">
            <div class="col-lg-6">
              <p>
                Toko kue Lazist Cake adalah toko kue & roti terbesar yang menyediakan berbagai macam kue dan roti.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Kue</li>
                <li><i class="ri-check-double-line"></i> Roti</li>
                <li><i class="ri-check-double-line"></i> Makanan Ringan Tradisional</li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                Laziest Cake dikenal sebagai toko kue dan roti modern pertama di Indonesia dan didirikan pada tahun 1978 di Jakarta.
                 Toko kue ini menjadi salah satu toko kue dan roti yang banyak mendapatkan penghargaan di indonesia.
              </p>
              <a href="#" class="btn-learn-more">Learn More</a>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

    <!-- ======= Services Section : https://icon-sets.iconify.design/ ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Services</h2>
            <h3>Check our <span>Services</span></h3>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <span class="iconify" data-icon="material-symbols:wifi" data-width="100" data-height="100"></span>
                <h4><a href="">Free Wifi</a></h4>
                <p>Lokasi setiap toko menyediakan wifi gratis untuk pengunjung dan karyawan</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <span class="iconify" data-icon="fa-solid:shipping-fast" data-width="100" data-height="100"></span>
                <h4><a href="">Fast Delivery</a></h4>
                <p>Pengiriman pesanan yang cepat dan aman melalui kurir kami</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <span class="iconify" data-icon="icon-park-twotone:bread" data-width="100" data-height="100"></span>
                <h4><a href="">Fresh From Oven</a></h4>
                <p>Semua kue & roti yang masih hangat dan nikmat baru dari oven</p>
              </div>
            </div>
  
            <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <span class="iconify" data-icon="material-symbols:work" data-width="100" data-height="100"></span>
                <h4><a href="">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <span class="iconify" data-icon="bx:slideshow" data-width="100" data-height="100"></span>
                <h4><a href="">Dele cardo</a></h4>
                <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <span class="iconify" data-icon="material-symbols:window" data-width="100" data-height="100"></span>
                <h4><a href="">Divera don</a></h4>
                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
              </div>
            </div> -->
  
          </div>
  
        </div>
      </section><!-- End Services Section -->

       <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter">362</span>
                <p>Happy Costumers</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="bi bi-star-fill"></i>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter">4.7</span>
                <p>Rating</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter">24</span>
                <p>Hours Of Support</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter">80</span>
                <p>Workers</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section -->
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contact</h2>
            <h3><span>Contact Us</span></h3>
            <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <!-- <i class="bx bx-map"></i> -->
                <span class="iconify" data-icon="bxs:store" data-width="50" data-height="50"></span>
                <h3>Our Address</h3>
                <p>Jl Lazist Cake RT 02 / RW 10
                  Jakarta, DKI Jakarta, 59251</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <!-- <i class="bx bx-envelope"></i> -->
                <span class="iconify" data-icon="dashicons:email-alt" data-width="50" data-height="50"></span>
                <h3>Email Us</h3>
                <p>lazist.cake@gmail.com</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <!-- <i class="bx bx-phone-call"></i> -->
                <span class="iconify" data-icon="carbon:phone-voice-filled" data-width="50" data-height="50"></span>
                <h3>Call Us</h3>
                <p>+62 588 3256 3253</p>
              </div>
            </div>
  
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0" id="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6031961131694!2d106.79125641427315!3d-6.315741095429189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee3e065d4f6b%3A0xe176f81a31564166!2sUniversitas%20Pembangunan%20Nasional%20Veteran%20Jakarta!5e0!3m2!1sen!2sid!4v1655734149616!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
  
            <div class="col-lg-6">
              <form action="<?= base_url('home/saran') ?>" method="post" role="form" class="php-email-form">
              <?= csrf_field(); ?> 
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col form-group">
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="Your Email" required>
                  </div>
                </div> 
                <div class="form-group">
                  <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" class="form-control" name="no" id="no" placeholder="Your Phone Number" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="pesan" id="pesan" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End Contact Section -->
    

<?= $this->endSection(); ?>