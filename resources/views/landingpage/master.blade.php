<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index gym</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('user')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('user')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{asset('user')}}/https://fonts.googleapis.com" rel="preconnect">
  <link href="{{asset('user')}}/https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="{{asset('user')}}/https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('user')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('user')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('user')}}/assets/css/main.css" rel="stylesheet">

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
  <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">
          <div class="col-xl-5 content">
              <h3>About</h3>
              <h2>GymFit.</h2>
              <p>Motivation to form the body of your dreams.</p>
          </div>
          <div class="col-xl-7">
              <div class="row gy-4 icon-boxes">
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon-box">
                          <i class="bi bi-buildings"></i>
                          <h3>POSTURE</h3>
                          <p>Correcting your posture will reduce stress and strain on your body. You’ll stand taller, move better, and feel less fatigue.</p>
                      </div>
                  </div> <!-- End Icon Box -->
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon-box">
                          <i class="bi bi-clipboard-pulse"></i>
                          <h3>MOBILITY</h3>
                          <p>Good mobility allows your body to move the way it was designed to move – pain free and with a good range of motion.</p>
                      </div>
                  </div> <!-- End Icon Box -->
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="icon-box">
                          <i class="bi bi-command"></i>
                          <h3>CORE</h3>
                          <p>Your core is part of almost every move you make. Strong core muscles act as a stabilizer, making moving safer and more efficient.</p>
                      </div>
                  </div> <!-- End Icon Box -->
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                      <div class="icon-box">
                          <i class="bi bi-graph-up-arrow"></i>
                          <h3>STRENGTH</h3>
                          <p>Strength training helps you develop strong bones, manage weight, and help you do everyday activities better and easier.</p>
                      </div>
                  </div> <!-- End Icon Box -->
              </div>
          </div>
      </div>
  </div>
</section><!-- /About Section -->

<!-- Features Section -->
<section id="features" class="features section">
  <!-- Additional features can be added here -->
</section><!-- /Features Section -->

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
              <li data-filter=".filter-app">Category 1</li>
              <li data-filter=".filter-product">Category 2</li>
              <li data-filter=".filter-branding">Category 3</li>
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="https://berita.99.co/wp-content/uploads/2022/07/dumbbell.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="https://berita.99.co/wp-content/uploads/2022/07/dumbbell.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="https://berita.99.co/wp-content/uploads/2022/07/sepeda-statis.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="https://berita.99.co/wp-content/uploads/2022/07/sepeda-statis.jpg" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="https://www.sfidn.com/image/catalog/Fitness/sfidn-home-gym-alat-fitness.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Equipment</h6>
                      <a href="https://www.sfidn.com/image/catalog/Fitness/sfidn-home-gym-alat-fitness.png" title="Equipment" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <!-- More portfolio items can be added here -->
          </div><!-- End Portfolio Container -->
      </div>
  </div>
</section><!-- /Portfolio Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Membership Options</h2>
      <p>Choose your plan</p>
  </div>
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="row g-4">
          <div class="col-lg-4">
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
          <div class="col-lg-4">
              <div class="pricing-item featured">
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
          <div class="col-lg-4">
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
      </div>
  </div>
</section><!-- /Pricing Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Our members' experiences</p>
  </div>
  <div class="container" data-aos="fade-up">
      <div class="testimonials-carousel swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="testimonial-item">
                      <div class="row gy-4 align-items-center">
                          <div class="col-lg-6">
                              <div class="testimonial-img">
                                  <img src="https://www.stiripesurse.ro/media/images/2021/07/15/1.jpg" class="img-fluid" alt="">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="testimonial-content">
                                  <p><i class="bi bi-quote quote-icon-left"></i> Great gym, awesome trainers, and a motivating environment. I reached my fitness goals faster than I thought possible. <i class="bi bi-quote quote-icon-right"></i></p>
                                  <h3>John Doe</h3>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><!-- End Testimonial Item -->
              <!-- More testimonials can be added here -->
          </div><!-- End Swiper Wrapper -->
      </div><!-- End Testimonials Carousel -->
  </div>
</section><!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Get in touch with us</p>
  </div>
  <div class="container" data-aos="fade-up">
      <div class="row gy-4">
          <div class="col-lg-5">
              <div class="contact-info">
                  <h3>Contact Info</h3>
                  <ul>
                      <li><i class="bi bi-geo-alt"></i> Address: 123 GymFit St., Fitness City</li>
                      <li><i class="bi bi-envelope"></i> Email: info@gymfit.com</li>
                      <li><i class="bi bi-phone"></i> Phone: +123 456 7890</li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-7">
              <form action="#" class="contact-form">
                  <div class="row gy-4">
                      <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="Name" required>
                      </div>
                      <div class="col-md-6">
                          <input type="email" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="col-12">
                          <textarea class="form-control" placeholder="Message" required></textarea>
                      </div>
                      <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary">Send Message</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section><!-- /Contact Section -->
  </main>

  @include('landingpage.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('user')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('user')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('user')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('user')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('user')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('user')}}/assets/js/main.js"></script>
</body>
</html>