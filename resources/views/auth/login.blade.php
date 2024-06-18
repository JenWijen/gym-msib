<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign-in Sign-up</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('adminskydash') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('adminskydash') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('adminskydash') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('adminskydash') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="shortcut icon" href="{{ asset('adminskydash') }}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-2 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('adminskydash/images/logo.png') }}" style="width: 80px; height: 80px;" alt="logo">
              </div>
              <h4>Hello! Welcome to GymFit !</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="{{ route('login') }}" class="pt-3 sign-in-form">
                @csrf
                <div class="form-group">
                  <div class="input-field">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required autofocus autocomplete="username" placeholder="Email">
                  </div>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                  <div class="input-field">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="current-password" placeholder="Password">
                  </div>
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check remember-me">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="auth-link text-black forgot-password">Forgot password?</a>
                  @endif
                </div>
                <div class="mt-3">
                  <input type="submit" value="Login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ route('register') }}" class="text-primary account-text" id="sign-up-link">Create</a>
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
  <script src="{{ asset('adminskydash') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('adminskydash') }}/js/off-canvas.js"></script>
  <script src="{{ asset('adminskydash') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('adminskydash') }}/js/template.js"></script>
  <script src="{{ asset('adminskydash') }}/js/settings.js"></script>
  <script src="{{ asset('adminskydash') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
