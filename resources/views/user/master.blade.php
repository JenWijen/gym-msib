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
    .sidebar {
    background-color: #333;
    color: white;
    padding: 20px;
    flex: 1 1 250px; /* Default to 250px width */
    min-width: 200px; /* Minimum width of 200px */
    }

    .swiper-button-prev,
      .swiper-button-next {
        opacity: 0.2; /* Adjust opacity level as needed */
      }

    /* Styling for star rating */
    .rating {
    display: inline-block;
    }

    .rating input {
    display: none;
    }

    .rating label {
    float: right;
    cursor: pointer;
    font-size: 24px;
    color: #ccc;
    }

    .rating label:hover,
    .rating label:hover ~ label {
    color: #fdd835;
    }

    .rating input:checked ~ label {
    color: #fdd835;
    }

    .rating input:checked ~ label:hover,
    .rating input:checked ~ label:hover ~ label {
    color: #fbc02d;
    }

    /* Optional: Adjust spacing or other styles as needed */
    .testimonials {
    padding: 60px 0;
    background-color: #f9f9f9;
    }

    .section-title h2 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
    }

    .section-title p {
    font-size: 18px;
    color: #666;
    }

    .swiper-pagination {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    }

    .swiper-button-next,
    .swiper-button-prev {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.8);
    border: none;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
    color: #333;
    font-size: 24px;
    transition: background-color 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
    background-color: rgba(0, 0, 0, 0.1);
    }

    .swiper-button-next {
    right: 20px;
    }

    .swiper-button-prev {
    left: 20px;
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

  @include('user.header')
@guest
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
                      <h6>gym</h6>
                      <a href="\user\assets\img\galeri\ac1.jpg" title="gym" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="\user\assets\img\galeri\ac2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>gym</h6>
                      <a href="\user\assets\img\galeri\ac2.jpg" title="gym" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\ac3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>gym</h6>
                      <a href="\user\assets\img\galeri\ac3.jpg" title="gym" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lpbd.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Lapangan Badminton</h6>
                      <a href="\user\assets\img\galeri\lpbd.jpg" title="Lapangan Badminton" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div>
              
              <!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lpfs.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Lapangan Futsal</h6>
                      <a href="\user\assets\img\galeri\lpfs.jpeg" title="Lapangan Futsal" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div>
              <!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lptn.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Lapangan Tenis</h6>
                      <a href="\user\assets\img\galeri\lptn.jpg" title="Lapangan Tenis" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="\user\assets\img\galeri\lpbk.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h6>Lapangan Basket</h6>
                      <a href="\user\assets\img\galeri\lpbk.jpg" title="Lapangan Basket" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
              </div><!-- End Portfolio Item -->
              <!-- More portfolio items can be added here -->
          </div><!-- End Portfolio Container -->
      </div>
  </div>
    </section><!-- /Portfolio Section -->

    <!-- Membership Section -->
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
                                  @foreach ($npackages as $npackage)
                                      <div class="swiper-slide">
                                          <div class="pricing-item">
                                              <h3>{{ $npackage->package_name }}</h3>
                                              <div class="icon">
                                              <i class="bi bi-box"></i>
                                          </div>
                                          <h4><sup>Rp</sup>{{ number_format($npackage->price, 0, ',', '.') }}<span> / {{ $npackage->duration }} day</span></h4>
                                          <ul>
                                              <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                              <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                              <li class="na"><i class="bi bi-x"></i> <span>Trainer</span></li>
                                          </ul>
                                          <a href="/login" class="btn btn-danger">Join</a>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                              <!-- Add Pagination if needed -->
                              <div class="swiper-pagination"></div>
                              <!-- Add Navigation if needed -->
                              <div class="swiper-button-next"></div>
                              <div class="swiper-button-prev"></div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="container section-title" data-aos="fade-up">
                  <h3 class="pt-5">Membership without Trainer</h3>
              </div>
              <hr>
              <div class="container" data-aos="fade-up" data-aos-delay="100">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="pricing-carousel swiper">
                              <div class="swiper-wrapper">
                                  @foreach ($packages as $package)
                                      <div class="swiper-slide">
                                          <div class="pricing-item">
                                              <h3>{{ $package->package_name }}</h3>
                                              <div class="icon">
                                              <i class="bi bi-box"></i>
                                          </div>
                                          <h4><sup>Rp</sup>{{ number_format($package->price, 0, ',', '.') }}<span> / {{ $package->duration }} day</span></h4>
                                          <ul>
                                              <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                              <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                              <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                                          </ul>
                                          <a href="/login" class="btn btn-danger">Join</a>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                              <!-- Add Pagination if needed -->
                              <div class="swiper-pagination"></div>
                              <!-- Add Navigation if needed -->
                              <div class="swiper-button-next"></div>
                              <div class="swiper-button-prev"></div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="container section-title" data-aos="fade-up">
                  <h3 class="pt-5">Membership with Trainer</h3>
              </div>
              <hr>
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
                            @foreach ($rpackages as $rpackage)
                                <div class="swiper-slide">
                                    <div class="pricing-item">
                                        <h3>{{ $rpackage->field_name }}</h3>
                                        @if ($rpackage->field_picture)
                                                     <img src="{{ asset($rpackage->field_picture) }}" alt="{{ $rpackage->field_name }}" 
                                                        class="img-fluid" alt="Field Image" style="max-width: 100%">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                    
                                    <h4><sup>Rp</sup>{{ number_format($rpackage->field_price, 0, ',', '.') }}<span> /hours</span></h4>
                                    <ul>
                                        <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                        <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                        <li><i class="bi bi-check"></i> <span>Cleaning</span></li>
                                    </ul>
                                    <a href="/login" class="btn btn-danger">Rent</a>
                                    </div>
                                </div>
                        
                            @endforeach
                        </div>
                        <!-- Add Pagination if needed -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation if needed -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Pricing Section -->

    <!-- Testimonials guest Section -->
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
                @endauth
            </div>
        <div class="col-lg-12">
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
                                <div class="rating">
                                    @for ($i = 0; $i < $ulasans->star_rating; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.97631999085!2d110.40338687438532!3d-7.12873549287514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089002a5df913%3A0x4255a41a6a6310da!2sDiamond%20Gym%20Ungaran!5e0!3m2!1sid!2sid!4v1718446725623!5m2!1sid!2sid" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </form>
          </div>
      </div>
  </div>
    </section><!-- /Contact Section -->

  </main><!-- End #main -->
@endguest

@auth
  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <img src="https://www.evolutiongymryde.co.uk/wp-content/uploads/2021/12/Evolution-Gym-Ryde.jpeg" alt="" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to GymFit.</h2>
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

    <!-- Membership Section -->
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
                                @foreach ($npackages as $npackage)
                                    <div class="swiper-slide">
                                        <div class="pricing-item">
                                            <h3>{{ $npackage->package_name }}</h3>
                                            <div class="icon">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <h4><sup>Rp</sup>{{ number_format($npackage->price, 0, ',', '.') }}<span> / {{ $npackage->duration }} day</span></h4>
                                        <ul>
                                            <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                            <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                            <li class="na"><i class="bi bi-x"></i> <span>Trainer</span></li>
                                        </ul>
                                        <a href="#" class="btn btn-danger">Join</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination if needed -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation if needed -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container section-title" data-aos="fade-up">
                <h3 class="pt-5">Membership without Trainer</h3>
            </div>
            <hr>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-carousel swiper">
                            <div class="swiper-wrapper">
                                @foreach ($packages as $package)
                                    <div class="swiper-slide">
                                        <div class="pricing-item">
                                            <h3>{{ $package->package_name }}</h3>
                                            <div class="icon">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <h4><sup>Rp</sup>{{ number_format($package->price, 0, ',', '.') }}<span> / {{ $package->duration }} day</span></h4>
                                        <ul>
                                            <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                            <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                            <li><i class="bi bi-check"></i> <span>Trainer</span></li>
                                        </ul>
                                        <a href="#" class="btn btn-danger">Join</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination if needed -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation if needed -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container section-title" data-aos="fade-up">
                <h3 class="pt-5">Membership with Trainer</h3>
            </div>
            <hr>
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
                            @foreach ($rpackages as $rpackage)
                                <div class="swiper-slide">
                                    <div class="pricing-item">
                                        <h3>{{ $rpackage->field_name }}</h3>
                                        @if ($rpackage->field_picture)
                                                     <img src="{{ asset($rpackage->field_picture) }}" alt="{{ $rpackage->field_name }}" 
                                                        class="img-fluid" alt="Field Image" style="max-width: 100%">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                    
                                    <h4><sup>Rp</sup>{{ number_format($rpackage->field_price, 0, ',', '.') }}<span> /hours</span></h4>
                                    <ul>
                                        <li><i class="bi bi-check"></i> <span>All Equipment</span></li>
                                        <li><i class="bi bi-check"></i> <span>Unlimited daily hours</span></li>
                                        <li><i class="bi bi-check"></i> <span>Cleaning</span></li>
                                    </ul>
                                    @auth
                                        <a href="{{ route('rental_user.create') }}" class="btn btn-danger">Rent</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-danger">Rent</a>
                                    @endauth
                                    </div>
                                </div>
                            
                            @endforeach
                        </div>
                        <!-- Add Pagination if needed -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation if needed -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Pricing Section -->

    <!-- Testimonials user Section -->
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
                    <label class="form-label">Star Rating</label><br>
                    <div class="rating">
                        <input type="radio" id="star5" name="star_rating" value="5" required>
                        <label for="star5"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star4" name="star_rating" value="4">
                        <label for="star4"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star3" name="star_rating" value="3">
                        <label for="star3"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star2" name="star_rating" value="2">
                        <label for="star2"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star1" name="star_rating" value="1">
                        <label for="star1"><i class="bi bi-star-fill"></i></label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="ulasan" class="form-label">Ulasan</label>
                    <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="active">Active</option>
                        <option value="deactive">Deactive</option>
                    </select>
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
                                    <div class="rating">
                                        @for ($i = 0; $i < $ulasans->star_rating; $i++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
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
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.97631999085!2d110.40338687438532!3d-7.12873549287514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089002a5df913%3A0x4255a41a6a6310da!2sDiamond%20Gym%20Ungaran!5e0!3m2!1sid!2sid!4v1718446725623!5m2!1sid!2sid" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->

  </main><!-- End #main -->
@endauth
  @include('user.footer')

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

  var swiper = new Swiper('.testimonials-carousel', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>


</body>

</html>
