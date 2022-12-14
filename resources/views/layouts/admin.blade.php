<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <p>
                            {{-- <i class="nav-icon fas fa-power-offf"></i> --}}
                            <i class="fas fa-sign-out-alt"></i>
                            Log Out
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>        
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

          <a href="index3.html" class="brand-link">
              <img src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
          </a>

          <div class="sidebar">

              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
                  </div>
              </div>

              {{-- <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                      <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                          aria-label="Search">
                      <div class="input-group-append">
                          <button class="btn btn-sidebar">
                              <i class="fas fa-search fa-fw"></i>
                          </button>
                      </div>
                  </div>
              </div> --}}

              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-chalkboard"></i>
                              <p>
                                  Dashboard
                                  {{-- <i class="right fas fa-angle-left"></i> --}}
                              </p>
                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link active">
                              <i class="far fas fa-cogs"></i>
                              <p>User Management
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>

                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fas fa-bomb nav-icon"></i>
                                      <p>Roles</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fas fa-bomb nav-icon"></i>
                                      <p> Permission</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fas fa-user-cog nav-icon"></i>
                                      <p> Users</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route("admin.locations.index") }}" class="nav-link">
                              <i class="nav-icon fas fa-user"></i>
                              <p> Location</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fas fa-bell nav-icon"></i>
                              <p> Event Types</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="" class="nav-link">
                              <i class="fas fa-image nav-icon"></i>
                              <p> Venues </p>
                          </a>
                      </li>
                      </li>
                      {{-- <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fas fa-lock nav-icon"></i>
                              <p>Password</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fas fa-key nav-icon"></i>
                              <p> Change Password</p>
                          </a>
                      </li> --}}

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fas fa-sign-out-alt"></i>
                              <p> Log Out</p>
                          </a>
                      </li>

                  </ul>
              </nav>

          </div>

      </aside>


        <div class="content-wrapper">
             @include('inc.messages')
            @yield('content')
        </div>

        <aside class="control-sidebar control-sidebar-dark">
          <div class="p-3">
              <h5>Title</h5>
              <p>Sidebar content</p>
          </div>
        </aside>
          
        <!-- /.content-wrapper -->
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    {{-- ...Some more scripts... --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
  

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@yield('scripts')
</body>

</html>
