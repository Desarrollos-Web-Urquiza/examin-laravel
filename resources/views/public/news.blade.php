@extends('layouts.plantilla')

@section('title', 'EXAMIN.AR - Novedades')

@section('content')

    <!-- Page Content -->
    <div class="container bottom">
      <div class="row">
        <div class="col-lg-12 text-center">
          
		  <br>
	
		  <h1 class="mt-5">NOVEDADES</h1>
		  {{-- <h4 class="mt-5">{{$Page}}</h4> --}}
		  
		  <br>
		  <br>
         {{-- 
		 	<?php
    		 
				header("Content-Type: text/html;charset=utf-8");//Acentos

				if(isset($_POST["Novedades"]))	{
					$texto= $_POST["Novedades"] ;

					/*ACTUALIZAMOS LAS NOVEDADES INGRESADAS EN EL FORMULARIO*/
					$consulta1 = "UPDATE `novedades` SET `Novedad a agregar`='{$texto}' WHERE 1  " ;						
					mysqli_query( $conexion, $consulta1);
				}

				/*IMPRIME NOVEDADES EN PANTALLA*/
				$consulta = "
					SELECT *
					FROM novedades	
					LIMIT 1
				"
				
				$A= mysqli_query($conexion, $consulta) ;
				$B=mysqli_fetch_array($A) ;
				echo $B['Novedad a agregar'] ;

		 	?>
		 --}}
			
        </div>
      </div>
    </div>




	<br>
	<br>
	<br>
	<br>


	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	
      
@endsection
