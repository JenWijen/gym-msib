<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index gym</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('user')}}/assets/img/logov3.png" rel="icon">
  <link href="{{asset('user')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{asset('user')}}/https://fonts.googleapis.com" rel="preconnect">
  <link href="{{asset('user')}}/https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="{{asset('user')}}/https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('user')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('user')}}/assets/css/main.css" rel="stylesheet">

  <style>
  .pricing-item {
      border-radius: 10px;
      border: 1px solid black;
      background: white;
      padding: 50px;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Tambahkan ini untuk bayangan */
  }

  .pricing-item img {
  width: 100%; /* Lebar gambar 100% */
  height: 200px; /* Ubah sesuai dengan tinggi yang diinginkan */
  object-fit: cover; /* Memastikan gambar diatur dengan rata */
  margin-bottom: 50px;
}

</style>


  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: May 18 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('landingpage.header')

  <main class="main">
    <!-- Hero Section -->
<section id="hero" class="hero section">
  <img src="https://www.evolutiongymryde.co.uk/wp-content/uploads/2021/12/Evolution-Gym-Ryde.jpeg" alt="" data-aos="fade-in">
  <div class="container">
      <div class="row">
          <div class="col-lg-10">
              <h2 data-aos="fade-up" data-aos-delay="100">Welcome to GymFit.</h2>
              <p data-aos="fade-up" data-aos-delay="200">Have the body of your dreams by starting now</p>
          </div>
          <div class="col-lg-5">
              <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" class="btn btn-primary" value="Sign up">
              </form>
          </div>
      </div>
  </div>
</section><!-- /Hero Section -->

<!-- Clients Section -->
<section id="clients" class="clients section">
  <div class="container" data-aos="fade-up">
      <div class="row gy-4">
          <!-- Client logos can be added here -->
      </div>
  </div>
</section><!-- /Clients Section -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="200">
      <div class="row align-items-xl-center gy-7">
          <div class="col-xxl-5 content">
              <h3>About</h3>
              <h2>GymFit.</h2>
              <p>Motivation to form the body of your dreams.</p>
          </div>
          <div class="col-xl-7">
              <div class="row gy-4 icon-boxes">
                  <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon-box">
                          <p>GymFit is the place you need to invest for yourself because in gymfit you can do many things from gym sports to the existence of a field to do your hobby, many benefits that you can feel and also many promos that will be given, so wait, let alone join GymFit immediately .</p>
                      </div>
                  </div> <!-- End Icon Box -->
              </div>
          </div>
      </div>
  </div>
</section><!-- /About Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Gallery</h2>
      <p>Images of our facilities and activities</p>
  </div>
  <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="\user\assets\img\galeri\ac1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\ac1.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="\user\assets\img\galeri\ac2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\ac2.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\ac3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\ac3.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lpbd.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\lpbd.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div>
              
              <!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lpfs.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\lpfs.jpeg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div>
              <!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lptn.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\lptn.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lpbk.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="\user\assets\img\galeri\lpbk.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <!-- More portfolio items can be added here -->
          </div><!-- End Portfolio Container -->
      </div>
  </div>
</section><!-- /Portfolio Section -->

<!-- Member Section -->
<section id="pricing" class="pricing section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Membership Options</h2>
      <p>Choose your plan</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
          <div class="col-lg-12">
              <div class="pricing-carousel swiper">
                  <div class="swiper-wrapper">
                      <!-- Pricing Item 1 -->
                      <div class="swiper-slide">
                          <div class="pricing-item">
                              <h3>Package 1</h3>
                              <div class="icon">
                                  <i class="bi bi-box"></i>
                              </div>
                              <h4><sup>Rp</sup>15.000<span> / day</span></h4>
                              <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li class="na"><i class="bi bi-x"></i> <span>Trainer</span></li>
                              </ul>
                              <div class="text-center"><a href="#" class="klik-btn">Sign Up</a></div>
                          </div>
                      </div><!-- End Pricing Item -->
                      
                      <!-- Pricing Item 2 -->
                      <div class="swiper-slide">
                          <div class="pricing-item">
                              <h3>Package 2</h3>
                              <div class="icon">
                                  <i class="bi bi-rocket"></i>
                              </div>
                              <h4><sup>Rp</sup>275.000<span> / month</span></h4>
                              <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                              </ul>
                              <div class="text-center"><a href="#" class="klik-btn">Sign Up</a></div>
                          </div>
                      </div><!-- End Pricing Item -->
                      
                      <!-- Pricing Item 3 -->
                      <div class="swiper-slide">
                          <div class="pricing-item">
                              <h3>Package 3</h3>
                              <div class="icon">
                                  <i class="bi bi-send"></i>
                              </div>
                              <h4><sup>Rp</sup>2.600.000<span> / year</span></h4>
                              <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                              </ul>
                              <div class="text-center"><a href="#" class="klik-btn">Sign Up</a></div>
                          </div>
                      </div><!-- End Pricing Item -->
                      
                      <div class="swiper-slide">
                          <div class="pricing-item">
                              <h3>Package 3</h3>
                              <div class="icon">
                                  <i class="bi bi-send"></i>
                              </div>
                              <h4><sup>Rp</sup>2.600.000<span> / year</span></h4>
                              <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                              </ul>
                              <div class="text-center"><a href="#" class="klik-btn">Sign Up</a></div>
                          </div>
                      </div><!-- End Pricing Item -->

                      <div class="swiper-slide">
                          <div class="pricing-item">
                              <h3>Package 3</h3>
                              <div class="icon">
                                  <i class="bi bi-send"></i>
                              </div>
                              <h4><sup>Rp</sup>2.600.000<span> / year</span></h4>
                              <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                              </ul>
                              <div class="text-center"><a href="#" class="klik-btn">Sign Up</a></div>
                          </div>
                      </div><!-- End Pricing Item -->

                      <div class="swiper-slide">
                          <div class="pricing-item">
                              <h3>Package 3</h3>
                              <div class="icon">
                                  <i class="bi bi-send"></i>
                              </div>
                              <h4><sup>Rp</sup>2.600.000<span> / year</span></h4>
                              <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                              </ul>
                              <div class="text-center"><a href="#" class="klik-btn">Sign Up</a></div>
                          </div>
                      </div><!-- End Pricing Item -->

                      <!-- Additional Pricing Items -->
                      <!-- More Pricing items can be added here -->
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                  
                  <!-- Add Navigation Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </div>
          </div>
      </div>
  </div>
</section><!-- /Pricing Section -->

<!-- Field Section -->
<section id="pricing" class="pricing section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Field Options</h2>
      <p>Choose your plan</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
          <div class="col-lg-12">
              <div class="pricing-carousel swiper">
                  <div class="swiper-wrapper">
                      <!-- Pricing Item 1 -->
                      <div class="swiper-slide">
                            <div class="pricing-item">
                                <h3>Lapangan Tenis</h3>
                                <img src="https://3.bp.blogspot.com/-SoekVZ9WFOk/WI_BsY_5BcI/AAAAAAAAe-Q/fIoOitd0EZgnsD-ooC21bhAgewJMv8PZgCLcB/s320/20140101_124313.jpg" class="img-fluid" alt="Field Image 1 style="max-width: 100%;">
                                <h4><sup>Rp</sup>200.000<span> / hours</span></h4>
                                <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Cleaning</span></li>
                              </ul>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="swiper-slide">
                            <div class="pricing-item">
                                <h3>Lapangan Badminton</h3>
                                <img src="https://abouttng.com/wp-content/uploads/2022/06/gambar-01-6.jpg" class="img-fluid" alt="Field Image 1 style="max-width: 100%;">
                                <h4><sup>Rp</sup>200.000<span> / hours</span></h4>
                                <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Cleaning</span></li>
                              </ul>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="swiper-slide">
                            <div class="pricing-item">
                                <h3>Lapangan Futsal</h3>
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhG1rLwun-jFfDvjaX1PxLgMsRiKL5oHhuuihfux5xL5jn2e2l1YATNlSSEHm7M_Esu_hUw-V-RieMSrSDlK3m1sVWbEcBISVKXfuasvhSypcpcTqYT2xMT_fUOGWcJKJhsZliLtweHLEM4/s640/lapangan_futsal11.jpeg" class="img-fluid" alt="Field Image 1 style="max-width: 100%;">
                                <h4><sup>Rp</sup>200.000<span> / hours</span></h4>
                                <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Cleaning</span></li>
                              </ul>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="swiper-slide">
                            <div class="pricing-item">
                                <h3>Lapangan Basket</h3>
                                <img src="https://image.made-in-china.com/43f34j00vYHkeacEqrqp/Flooring-PVC-Indoor-Basketball-Court-Sports-Vinyl-Flooring.webp" class="img-fluid" alt="Field Image 1 style="max-width: 100%;">
                                <h4><sup>Rp</sup>200.000<span> / hours</span></h4>
                                <ul>
                                  <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                  <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                  <li><i class="bi bi-check"></i> <span>Cleaning</span></li>
                              </ul>
                            </div>
                        </div><!-- End Pricing Item -->


                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                  
                  <!-- Add Navigation Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </div>
          </div>
      </div>
  </div>
</section><!-- /Pricing Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>What they are saying</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
          <div class="col-lg-6">

          @auth
        <form action="{{ route('ulasan.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required readonly>
            </div>

            <div class="mb-3">
                <label for="ulasan" class="form-label">Ulasan</label>
                <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@else
    <p>Please log in to send a message.</p>
@endauth

          </div>
          <div class="col-lg-6">
          <div class="testimonials-carousel swiper">
    <div class="swiper-wrapper">
        @foreach ($ulasan as $ulasans)
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <h3>{{ $ulasans->name }}</h3>
                    <p>
                        <i class="bi bi-quote"></i>
                        {{ $ulasans->ulasan }}
                        <i class="bi bi-quote"></i>
                    </p>
                </div>
            </div><!-- End Testimonial Item -->
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
          </div>
      </div>
  </div>
</section>
<!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
      <p>Get in touch</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
          <div class="col-lg-6">
              <div class="info-item">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>123 Street, City, Country</p>
              </div>
              <div class="info-item">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@gymfit.com</p>
              </div>
              <div class="info-item">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+123 456 789</p>
              </div>
          </div>
          <div class="col-lg-6">
              <form action="#" method="post" class="php-email-form">
                  <div class="row gy-4">
                      <div class="col-md-6">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6">
                          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                      </div>
                      <div class="col-md-12">
                          <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                      </div>
                      <div class="col-md-12">
                          <textarea name="message" rows="6" class="form-control" placeholder="Message" required></textarea>
                      </div>
                      <div class="col-md-12 text-center">
                          <button type="submit" class="klik-btn">Send Message</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section><!-- /Contact Section -->

  </main><!-- End #main -->

  @include('landingpage.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('user')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('user')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/php-email-form/validate.js"></script>


  <!-- Vendor JS Files -->
<script src="{{asset('user')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="{{asset('user')}}/assets/js/main.js"></script>

<script>
  var swiper = new Swiper(".pricing-carousel", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true, // Infinite loop
    autoplay: {
      delay: 5000,
    },
  });
</script>


</body>

</html>
