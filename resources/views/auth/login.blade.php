<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../material-kit/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../material-kit/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Laravel</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{URL::asset('material-kit/css/material-kit.css?v=2.0.5')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('material-kit/demo/demo.css')}}" rel="stylesheet" />
  <!-- Alertify Js-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.4/css/alertify.css">
</head>

<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="background-image: url('{{URL::asset('/material-kit/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}"->
              @csrf
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Iniciar sesión</h4>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" name="email" required class="form-control" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" required class="form-control" placeholder="Password...">
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-success btn-link btn-wd btn-lg">Entrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="copyright float-right">
         &copy;2019, made with <i class="material-icons">favorite</i> by
            <a href="virtua.mx" target="_blank">Virtua</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{URL::asset('material-kit/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('material-kit/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('material-kit/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('material-kit/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{URL::asset('material-kit/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{URL::asset('material-kit/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!-- Alertify Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.4/alertify.js"></script>
  @if(count($errors))
      @foreach($errors->all() as $error)
        <script>
          alertify.error("{{$error}}");
        </script>
      @endforeach
  @endif
        
</body>

</html>
