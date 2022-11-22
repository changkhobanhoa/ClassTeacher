<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản Trị</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/backend/vendors/feather/feather.css">
  <link rel="stylesheet" href="/backend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/backend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/backend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="/backend/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/backend/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/backend/images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
        @include('admin.include.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.include.setting')
            @include('admin.include.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('admin.include.footer')
            </div>
        </div>
    </div>


  <script src="/backend/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/backend/vendors/chart.js/Chart.min.js"></script>
  <script src="/backend/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="/backend/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/backend/js/off-canvas.js"></script>
  <script src="/backend/js/hoverable-collapse.js"></script>
  <script src="/backend/js/template.js"></script>
  <script src="/backend/js/settings.js"></script>
  <script src="/backend/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/backend/js/dashboard.js"></script>
  <script src="/backend/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
