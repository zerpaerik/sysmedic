<!DOCTYPE html>
<html lang="en">
<head>
<title>Iniciar Sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default panel-primary class">
                  <div class="panel-heading">
                      <span class="glyphicon glyphicon-lock"></span> Inicio de Sesión</div>
                  <div class="panel-body">
                    {!!Form::open(array('url'=>'login','method'=>'POST','class'=>'form-horizontal','autocomplete'=>'off')) !!}
                    {{Form::token()}}
                        @if(Session::has('success'))
                          <div class="row">
                            <div class="col-md-12">
                              <div class="alert alert-danger">
                                  {{Session::get('success')}}
                              </div>
                            </div>
                          </div>
                        @endif
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">
                              Usuario</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="usuario" id="usuario"  placeholder="Introduzca su usuario" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">
                             Contraseña</label>
                          <div class="col-sm-9">
                              <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Introduzca su contraseña" required>
                          </div>
                      </div>
                      <div class="form-group last">
                          <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-success btn-sm">
                                  Acceder</button>
                                   <button type="reset" class="btn btn-default btn-sm">
                                  Limpiar</button>
                          </div>
                      </div>
                      {!!Form::close()!!}
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
