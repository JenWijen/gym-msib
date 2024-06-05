<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GymFit.</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('skydash')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('skydash')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('skydash')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('skydash')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{asset('skydash')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{asset('skydash')}}/js/select.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('skydash')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('skydash')}}/images/favicon.png" />
</head>
<body>

  <div class="container-scroller">
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
      @include('admin.partial')
      @include('admin.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('admin.footer')
      </div>
    </div>
  </div>
<!-- plugins:js -->
<script src="{{asset('skydash')}}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('skydash')}}/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('skydash')}}/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('skydash')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{asset('skydash')}}/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('skydash')}}/js/off-canvas.js"></script>
<script src="{{asset('skydash')}}/js/hoverable-collapse.js"></script>
<script src="{{asset('skydash')}}/js/template.js"></script>
<script src="{{asset('skydash')}}/js/settings.js"></script>
<script src="{{asset('skydash')}}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('skydash')}}/js/dashboard.js"></script>
<script src="{{asset('skydash')}}/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
</body>

</html>