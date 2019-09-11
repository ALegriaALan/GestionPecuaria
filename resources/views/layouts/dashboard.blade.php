<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Laravel</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{URL::asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
  <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet" />
  <!-- Webpack Styles -->
  <link rel="stylesheet" href="{{ url(mix('dist/app.css')) }}">
  <!-- Alertify Js-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.4/css/alertify.css">
  <!-- Custom CSS-->
  <link rel="stylesheet" href="{{URL::asset('/css/custom.css')}}">
</head>

<body>
  <div class="wrapper"> 
    <div class="sidebar" data-color="green" data-background-color="black" data-image="https://demos.creative-tim.com/material-dashboard-react/static/media/sidebar-1.8e9f0a3c.jpg">
        <div class="logo">
            <a href="http://www.virtua.mx" class="simple-text logo-normal">
            <img class="tr-dash-logo" src="{{URL::asset('/img/virtua-logo.png')}}" alt="">
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="nav-item" id="li-dashboard">
                <a class="nav-link" href="{{ route('home') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>
            </ul>
        </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form" id="search-form">
                    <div class="input-group no-border">
                        <input type="text" id="search-field" value="{{ Request::get('query') }}" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                        Stats
                    </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                        Some Actions
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Log out</a>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <!-- End Navbar -->
        <div class="content" id="app">
            <v-app>
                @yield('content')
            </v-app>
        </div>

        <footer class="footer">
            <div class="container-fluid">
            <div class="copyright float-right">
                &copy;2019, made with <i class="material-icons">favorite</i> by
                <a href="http://virtua.mx" target="_blank">Virtua</a>.
            </div>
            </div>
        </footer>
    </div>
  </div>
  @yield('topscripts')
  <!-- Webpack Js -->
  <script src="{{ url(mix('dist/app.js')) }}"></script>
  <!--   Core JS Files   -->
  <script src="{{URL::asset('js/core/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/core/popper.min.js')}}"></script>
  <script src="{{URL::asset('js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{URL::asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{URL::asset('js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{URL::asset('js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{URL::asset('js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{URL::asset('js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{URL::asset('js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{URL::asset('js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{URL::asset('js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{URL::asset('js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{URL::asset('js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{URL::asset('js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{URL::asset('js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{URL::asset('js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{URL::asset('js/plugins/arrive.min.js')}}"></script>
  <!-- Chartist JS -->
  <script src="{{URL::asset('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{URL::asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::asset('js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
  {{-- Alertify JS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.4/alertify.js"></script>  

  <script>
    /**
      * Ejecuta las funciones pertinentes al crear el documento
      *
      * @param {Element} form
      * @return false
    */
    $(document).ready(() => {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
      markCurrentItem();
    });

    /**
      * Marca el item actual en el dashboard
      *
      * @return false
    */
    function markCurrentItem() {
      var pathname = window.location.pathname;
      var res = pathname.split("/");
      var modules = res[1];
      var submodules = res[2];

      switch(modules)
      {
        case "usuarios":
            $('#li-usuarios').addClass('active');
        break;
        case "productores":
            $('#li-productores').addClass('active');
        break;
        default:
            $('#li-dashboard').addClass('active');
      }
    }

    /**
        * Abre un diálogo de confirmación de sweetAlert y si se confirma
        * hace submit del formulario que pidó la confirmación
        *
        * @param {Element} form
        * @return false
    */
    window.confirmSubmissionFirst = (form) => {
      swal({
        title: '¿Estas seguro de eliminar este registro?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#5eb562',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
      }).then(result => result.value ? form.submit() : null)
      return false;
    }

    /**
        *  Inicializa el buscador en el dashboard
        *
        * @param {Element} form
    */
    $('#search-form').submit(function (event) {
      event.preventDefault();
      let pathForQuery = location.origin + location.pathname
      let query = $('#search-field').val()
      let navigateTo = pathForQuery
      if (!query) return location.href = navigateTo

      navigateTo += `?query=${query}`
      location.href = navigateTo
    })
  </script>
</body>

</html>
