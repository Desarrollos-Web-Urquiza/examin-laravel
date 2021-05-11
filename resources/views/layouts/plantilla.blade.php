<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Examin.ar - Exámenes online hechos a medida">
    <title>@yield("title")</title>
    <!-- Bootstrap core CSS -->
    <link href={{ asset("/vendor/bootstrap/css/bootstrap.min.css" ) }}  rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href= {{ asset("/css/half-slider.css" ) }} rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href= {{ asset("/customStyles.css" ) }} rel="stylesheet">
    
    <!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href={{ asset("/images/Logo.png" ) }}>
    
    {{-- Contact styles --}}
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href={{route('index')}}>EXAMIN.AR</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href={{route('index')}}>Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href={{route('contacto')}}>Contacto</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href={{route('novedades')}}>Novedades</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href={{route('beneficios')}}>Beneficios</a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href={{route('login')}}>Iniciar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    @yield('content')

	<!-- Footer -->
    <br>
    <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EXAMIN.AR 2016-2021</p>
    </div>
    <!-- /.container -->
    </footer>
      
    <!-- Bootstrap core JavaScript -->
    <script src= {{ asset("./vendor/jquery/jquery.min.js" ) }}></script>
    <script src= {{ asset("./vendor/bootstrap/js/bootstrap.bundle.min.js" ) }}></script>
</body>
</html>