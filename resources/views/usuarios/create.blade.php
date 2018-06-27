<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sysmedic Registro</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('node_modules/mdi/css/materialdesignicons.css')}}">
  <link rel="stylesheet" href="{{asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-6 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center mb-3">Registrar Usuario</h3>
              <form>
                <div class="form-group">
                  <label>Usuario</label>
                  <input type="text" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Recordarme
                      </label>
              
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Registrar</button>
                </div>
             
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
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
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <!-- endinject -->
</body>

</html>
