<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Examin.ar - Exámenes online hechos a medida">
    <meta name="author" content="">

    <title>Examin.ar - Evaluación en curso</title>
    
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

  	<h1 align="center">EVALUACIÓN EN CURSO</h1>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">   
		      <br>  
          <?php
          
            // $titulo = $_POST["evaluacion"] ;
            
            // $alumno = $_POST["Alumno"] ;
            
            // $DNI= $_POST["DNI"] ;           
            
          ?>
	        <section id="form">
            <!--FORMULARIO-->
            <form action="insertar_respuestas.php" class="contact_form" method="POST">
	 	          <h3> Este examen es de la materia: "<?php echo $titulo ; ?>"</h3>
		          <h3> El alumno que está rindiendo este examen es: "<?php echo $alumno ; ?>" </h3>
	            <h3> El DNI del alumno que está rindiendo este examen es: "<?php echo $Cc ; ?>" </h3><br><br>
              
              <!--PASO COMO PARAMETRO LOS "id" DE LA EVALUCION Y EL ALUMNO-->
              <input name="id_titulo" type="hidden" value="<?php echo $id_titulo ; ?>" >
              <input name="id_alumno" type="hidden" value="<?php echo $id_alumno ; ?>" >
              <input name="cantidad_de_preguntas" type="hidden" value="<?php echo $contadordepreguntas ; ?>" >
              <!--PASO COMO PARAMETRO EL "id" DE LA PREGUNTA-->
              <input name="Respuesta_nro_<?php echo $i ; ?>" type="hidden" value="<?php echo $id_pregunta ; ?>" >     
              <!--BOTÓN DE SUBMIT-->
              <input class="btn btn-primary" type="submit" value="Terminar examen"> </input>
              <br><br>	
	        </section>
        </div>
      </div>
    </div>
  </body>
	

  @include('layouts.onlyFooter')<!-- footer -->

  </html>