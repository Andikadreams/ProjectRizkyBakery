<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rizky Bakery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- Navbar -->
  @include('layouts.user.navbar')
  <!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Yummy?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Rizky Bakery Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        @if(Auth::user())

            <!-- <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                    <h4>Starters</h4>
                </a>
            </li> -->
            <!-- End tab nav item -->
            @foreach($kategori as $kategoris)
            @php($check = $kategoris->id)
            @if($check != 1)
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                    <h4>{{$kategoris->nama}}</h4>
                </a>
                @endif
            @endforeach
            <!-- End tab nav item -->

            <!-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                    <h4>Lunch</h4>
                </a>
            </li> -->
            <!-- End tab nav item -->

            <!-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                    <h4>Dinner</h4>
                </a>
            </li> -->
            <!-- End tab nav item -->
            @else
            @endif
        </ul>
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="menu-starters">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Starters</h3>
                </div>
                <div class="row gy-5">
                @foreach($produks as $produk)
                @php($kategori = $produk->id_kategori)
                @if($kategori == 3)
                    <div class="col-lg-4 menu-item">
                        <a href="{{asset($produk->foto_produk)}}" class="glightbox"><img
                                src="{{asset($produk->foto_produk)}}" class="menu-img img-fluid" alt=""></a>
                        <h4>{{$produk->nama_produk}}</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                          Rp.{{$produk->harga}}
                        </p>
                    </div>
                    @endif
                    @endforeach
                    <!-- Menu Item -->

                    <!-- <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <a href="#" class="price">
                            $14.95
                        </a>
                        <br>
                        <button>add to cart</button>
                    </div> -->
                    <!-- Menu Item -->

                    <!-- <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div> -->
                    <!-- Menu Item -->

                    <!-- <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div> -->
                    <!-- Menu Item -->

                    <!-- <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div> -->
                    <!-- Menu Item -->

                    <!-- <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div> -->
                    <!-- Menu Item -->

                </div>
            </div><!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-breakfast">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Breakfast</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Breakfast Menu Content -->
        </div>
    </div>
</section>
          <!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3951.807154884151!2d112.62235007406971!3d-7.915203078786288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNTQnNTQuOCJTIDExMsKwMzcnMjkuNyJF!5e0!3m2!1sid!2sid!4v1684898131130!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div>
          <!-- End Info Item -->

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->
  @include('layouts.user.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>