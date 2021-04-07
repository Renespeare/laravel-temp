<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ 'adminlte/plugins/fontawesome-free/css/all.min.css' }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ 'adminlte/dist/css/adminlte.min.css' }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('adminlte.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('adminlte.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@stack('prepend-script')
<!-- jQuery -->
<script src="{{ 'adminlte/plugins/jquery/jquery.min.js' }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ 'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<!-- AdminLTE App -->
<script src="{{ 'adminlte/dist/js/adminlte.min.js' }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ 'adminlte/dist/js/demo.js' }}"></script>
@stack('addon-script')
</body>
</html>
