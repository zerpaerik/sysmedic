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
                <!--main pages end-->
                <!--sample pages start-->
                <li class="nav-item nav-category">
                    <span class="nav-link">Pàginas Principales</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-file"></i>
                        <span class="menu-title">Archivos</span>
                        <i class=""></i>
                    </a>
                    <div class="collapse" id="authSubmenu">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item">
                              <a class="mdi mdi-account" href="pages/samples/register.html">
                            Personal
                          </a>
                          </li>
                          <li class="nav-item">
                              <a class="mdi mdi-account-plus" href="pages/samples/register-2.html">
                                Pacientes
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="mdi mdi-account-box" href="pages/samples/login.html">
                                Contactos
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="mdi mdi-hospital-building" href="pages/samples/login-2.html">
                               Centros Mèdicos
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="mdi mdi-hospital" href="pages/samples/login-2.html">
                               Centros Particulares
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="mdi mdi-message-text-outline" href="pages/samples/login-2.html">
                               Laboratorios
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="mdi mdi-message-text" href="pages/samples/login-2.html">
                               Analisis de Laboratorios
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
