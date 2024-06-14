<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GymFit</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('skydash') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('skydash') }}/images/favicon.png" />
</head>
<style>
    /* Remove sorting icons when column is active */
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:before {
        display: none;
    }
</style>

<body>
    <div class="container-scroller">
        @include('staff.navbar')

        <div class="container-fluid page-body-wrapper">
            @include('staff.partial')
            @include('staff.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('staff.footer')
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('skydash') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('skydash') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('skydash') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('skydash') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('skydash') }}/js/off-canvas.js"></script>
    <script src="{{ asset('skydash') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('skydash') }}/js/template.js"></script>
    <script src="{{ asset('skydash') }}/js/settings.js"></script>
    <script src="{{ asset('skydash') }}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('skydash') }}/js/dashboard.js"></script>
    <script src="{{ asset('skydash') }}/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->

    <!-- Datatables CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#example')) {
                $('#example').DataTable({
                    destroy: true // This ensures reinitialization is handled
                });
            }
        });
    </script>

    <script>
        $(".nav-item .nav-link").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });
    </script>
</body>

</html>
