@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Crear alumno paso 2')

@section('content-profesor')
    
    <!-- Page Content -->
    <div class="container top-10 bottom-5">
    	<div class="row">
			<div class="col-lg-12 text-center">
				<form action="insertar_alumno.php"  name="frmAlumno2" method="POST">
					<!-- TÍITULO-->
					<h1 align="center">CREAR ALUMNO - PASO 2</h1><br>
					<h3 align="center">Ahora especifique el curso al que pertenece el alumno a crear</h3>
					<!--FORMULARIO-->
					<form action="insertar_edicion.php" class="contact_form" method="POST">
						<h2 align="center">Escuela seleccionada: ""</h2>
						<div class="container-contact100">
							<form class="contact100-form validate-form">
								<div class="wrap-contact100">
									<span class="contact100-form-title">
										Asignar nuevo curso:
									</span>	
									<div class="wrap-input100 validate-input" >
										<label class="label-input100" >	
										</label>
										<select  class="input100" name="curso"><br><br>
											<span class="focus-input100"></span>
										</select>
										<span class="focus-input100"></span>
									</div>
									<div class="container-contact100-form-btn">
										<button class="contact100-form-btn" type="submit">
											CREAR
										</button>
									</div>
								</div>
							</form>
						</div>	  
					</form>
				</form>
        	</div>
      	</div>
    </div>

	<p>*Nota: Asegúrese de que la escuela que seleccionó posea cursos. </p>

	<div align="left">
		<a href={{route('crear_alumno')}} class="btn btn-primary">Atrás</a>
	</div>

@endsection
