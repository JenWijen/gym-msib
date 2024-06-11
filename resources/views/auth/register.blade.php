<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydash') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('skydash') }}/images/favicon.png" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-2 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('skydash/images/logo.png') }}" style="width: 80px; height: 80px;" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form method="POST" action="{{ route('register') }}" class="pt-3">
                @csrf

                <!-- Nama -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Username">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    {{ __('Register') }}
                  </button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('skydash') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydash') }}/js/off-canvas.js"></script>
  <script src="{{ asset('skydash') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('skydash') }}/js/template.js"></script>
  <script src="{{ asset('skydash') }}/js/settings.js"></script>
  <script src="{{ asset('skydash') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
