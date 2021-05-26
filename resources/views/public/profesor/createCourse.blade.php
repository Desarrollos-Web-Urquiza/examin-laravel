@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Crear curso')

@section('content-profesor')
    
    <!-- Page Content -->
    <div class="container top-10 bottom-10">
		<div class="row">
			<div class="col-lg-12 text-center">
				<section id="form">	  
					<!-- TÍITULO-->
					<h1 align= center>CREAR CURSO</h1></align><br>
					<h3 align= center>Especifique descripción del curso y asígnele escuela</h3></align>
					<!--FORMULARIO-->
					<form action="insertar_curso.php"  name="frmCurso" method="POST">
						<div class="container-contact100">
							<div class="wrap-contact100">
								<form class="contact100-form validate-form">
									<span class="contact100-form-title">
										Descripción del curso:
									</span>
									<div class="wrap-input100 validate-input" >
										<label class="label-input100" >
										</label>
										<input class="input100" type="text"   name="curso" >
										<span class="focus-input100"></span>
									</div>
									<form class="contact100-form validate-form">
										<span class="contact100-form-title">
											Asignar escuela:
										</span>
										<div class="wrap-input100 validate-input" >
											<label class="label-input100" >
											</label>
											<select  class="input100" name="escuela"><br><br>
												<?php	
													// echo $schoolsValues ;
													$i = 0 ;
													foreach ($schoolsValues as $value)	{
														echo '<option value=' . '"' . $value . '"' . ">" ;
														
														echo $value; 
												
														echo "</option>" ;
														$i++ ;
													} 

												?>
											</select>
											<span class="focus-input100"></span>
											<span class="focus-input100"></span>
										</div>
										<div class="container-contact100-form-btn">
											<button class="contact100-form-btn" type="submit">
												CREAR
											</button>
										</div>
									</form>
								</form>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
  
@endsection
