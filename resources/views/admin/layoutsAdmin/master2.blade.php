<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="{{asset('admin/js/mainAdmin.js')}}" defer></script>
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="{{asset('admin/images/noimage.jpg')}}" /> --}}
  <link rel="shortcut icon" href="{{asset('admin/images/logo_2H_tech.png')}} "type="image/x-icon">
</head>
<body>
  <div class="container-scroller">
    @include('admin.layoutsAdmin.nav2')
    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper pt-5">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.layoutsAdmin.nav1')
      <!-- partial -->
      <div class="main-panel">
        @yield('contenu')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.layoutsAdmin.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('admin/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('admin/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/template.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <script src="{{asset('admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/dashboard.js')}}"></script>
  
  <!-- End custom js for this page-->
</body>

</html>

