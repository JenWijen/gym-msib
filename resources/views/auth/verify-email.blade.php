<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Email Verification</title>
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
              <h4>Verify Your Email Address</h4>
              <h6 class="font-weight-light">We have sent you a verification link. Please check your email.</h6>

              <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
              </div>

              @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                  {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
              @endif

              <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                  @csrf
                  <div>
                    <input type="submit" value="Resend Verification Email" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-block btn-light btn-lg font-weight-medium auth-form-btn">
                    {{ __('Log Out') }}
                  </button>
                </form>
              </div>

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
