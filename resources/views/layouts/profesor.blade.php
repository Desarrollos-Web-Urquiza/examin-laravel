<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Examin.ar - Exámenes online hechos a medida">
    <meta name="author" content="">

    <title>@yield("title-profesor")</title>
    
    <!-- Bootstrap core CSS -->
    <link href={{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}  rel="stylesheet">
    <!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href={{ asset("/images/Logo.png" ) }}>
    <!-- Custom styles for this template -->
    <link href={{ asset("/css/half-slider.css" ) }} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset("css/main.css" ) }}>
    <!-- Estilos personalizados -->
    <link href= {{ asset("/customStyles.css" ) }} rel="stylesheet">
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
              <a class="nav-link" href={{route('Index_Profesor')}}>Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ver_alumnos.php">Mis alumnos</a>
            </li>
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Crear
              </a>
             <div class ="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href={{route('crear_alumno')}}>Crear alumno nuevo</a>
                <a class="dropdown-item" href={{route('crear_curso')}}>Crear curso nuevo</a>
                <a class="dropdown-item" href={{route('crear_escuela')}}>Crear escuela nueva</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href={{route('generar_evaluacion')}}>Generar evalución</a>
            </li> <li class="nav-item active">
              <a class="nav-link" href={{route('buscar_evaluacion')}}>Rendir evaluación</a>
            </li> 
			      <li class="nav-item active">
              <a class="nav-link" href={{route('login')}}> Cambiar de usuario
              <!--BOTÓN DE LOGOUT-->
                <td><a class="btn btn-danger" href="logout.php">Cerrar Sesión</a></td>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>      

    @yield('content-profesor')
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EXAMIN.AR 2016-2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src= {{ asset("./vendor/jquery/jquery.min.js" ) }}></script>
    <script src= {{ asset("./vendor/bootstrap/js/bootstrap.bundle.min.js" ) }}></script>
  </body>
</html>