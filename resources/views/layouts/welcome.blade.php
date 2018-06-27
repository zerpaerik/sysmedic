<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sysmedic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('node_modules/mdi/css/materialdesignicons.css')}}">
  <link rel="stylesheet" href="{{asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('node_modules/icheck/skins/all.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>

<body class="navbar-primary">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="#">Sysmedic
              <i class="mdi mdi-cube-send"></i>
            </a>
            <a class="navbar-brand brand-logo-mini" href="#"><i class="mdi mdi-cube-send"></i></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="nav-profile">
              <span class="hidden-xs">Hola, {{Session::get('nombres')}}</span>
              <img src="{{asset('images/faces/face6.jpg')}}" />
            </div>
            <form class="form-inline mt-2 mt-md-0 d-none d-lg-block ml-lg-auto">
                <input class="form-control search" type="text" placeholder="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-warning">7</span>
                    </a>
                </li>
              
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
        </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <!--main pages start-->
                <li class="nav-item nav-category">
                    <span class="nav-link">General</span>
                </li>
            
              
                <!--main pages end-->
                <!--sample pages start-->
                <li class="nav-item nav-category">
                    <span class="nav-link">Sample pages</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-lock-outline"></i>
                        <span class="menu-title">Authentication</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="collapse" id="authSubmenu">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item">
                              <a class="nav-link" href="pages/samples/register.html">
                            Register
                          </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages/samples/register-2.html">
                                Register 2
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages/samples/login.html">
                                Login
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages/samples/login-2.html">
                                Login 2
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pages/samples/lock-screen.html">
                                Lock screen
                              </a>
                          </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-alert-circle-outline"></i>
                        <span class="menu-title">Error pages</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="collapse" id="errorSubmenu">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/error-404.html">
                                    404
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/error-500.html">
                                    500
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
              
               
         
              
          
            </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Sysmedic Admin</a> &copy; 2018
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('node_modules/icheck/icheck.min.js')}}"></script>
  <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/chart.js"></script>
  <script src="{{asset('js/iCheck.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
