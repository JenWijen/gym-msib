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

<div class="container-fluid">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Rental Form</h4>
          <p class="card-description">Adding New Package</p>
          <form class="forms-sample" action="{{ route('user_rent.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="user_id">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required readonly>
              </div>
              <div class="form-group">
                  <label for="rent_package_id">Name Package:</label>
                  <select class="form-control" id="rent_package_id" name="rent_package_id" required>
                      @foreach ($rpackages as $rpackage)
                          <option value="{{ $rpackage->id }}">{{ $rpackage->field_name }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="rent_hours">Rental Hours:</label>
                  <input type="number" class="form-control" id="rent_hours" name="rent_hours" required>
              </div>
              <div class="form-group">
                  <label for="startdate">Date:</label>
                  <input type="date" class="form-control" id="startdate" name="startdate" required>
              </div>
              <a class="btn btn-primary" href="{{ route('staff_rent_book.index') }}">Back</a>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
  </div>
</div>

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