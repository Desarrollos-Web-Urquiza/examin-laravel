<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Examin.ar - Exámenes online hechos a medida">
    <meta name="author" content="">

    <title>@yield("title-footer")</title>
    
    <!-- Bootstrap core CSS -->
    <link href={{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}  rel="stylesheet">
    <!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href={{ asset("/images/Logo.png" ) }}>
    <!-- Custom styles for this template -->
    <link href={{ asset("/css/half-slider.css" ) }} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset("css/main.css" ) }}>
    <!-- Estilos personalizados -->
    <link href= {{ asset("/customStyles.css" ) }} rel="stylesheet">
     <!-- Bootstrap core CSS-->
     <link href={{ asset("Boostrap3/vendor/bootstrap/css/bootstrap.min.css" ) }} rel="stylesheet">
     <!-- Custom fonts for this template-->
     <link href= {{ asset("Boostrap3/vendor/fontawesome-free/css/all.min.css" ) }} rel="stylesheet" type="text/css">
     <!-- Page level plugin CSS-->
     <link href={{ asset("Boostrap3/vendor/datatables/dataTables.bootstrap4.css") }} rel="stylesheet">
     <!-- Custom styles for this template-->
     <link href={{ asset("Boostrap3/css/sb-admin.css") }} rel="stylesheet">
     <!-- Bootstrap core CSS -->
     <link href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
  </head>

  <body>
   
    @yield('content-footer')
    
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