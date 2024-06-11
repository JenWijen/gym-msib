<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reset Password</title>
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="shortcut icon" href="{{ asset('skydash') }}/images/favicon.png" />
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
              <h4>Reset Password</h4>
              <h6 class="font-weight-light">Please enter your new password.</h6>
              <form method="POST" action="{{ route('password.store') }}" class="pt-3">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="form-group">
                  <div class="input-field">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="Email">
                  </div>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                  <div class="input-field">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="new-password" placeholder="Password">
                  </div>
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                  <div class="input-field">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required autocomplete="new-password" placeholder="Confirm Password">
                  </div>
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-3">
                  <input type="submit" value="Reset Password" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
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
