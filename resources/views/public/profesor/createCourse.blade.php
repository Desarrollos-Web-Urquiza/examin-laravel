@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Crear curso')

@section('content-profesor')
    
    <!-- Page Content -->
    <div class="container top-10 bottom-10">
		<div class="row">
			<div class="col-lg-12 text-center">
				<section id="form">	  
					<!-- TÍITULO-->
					<h1 align="center">CREAR CURSO</h1><br>
					<h3 align="center">Especifique descripción del curso y asígnele escuela</h3>
					<!--FORMULARIO-->
					<form action={{route('crear_curso')}}  name="frmCurso" method="POST">
						@csrf
						<div class="container-contact100">
							<div class="wrap-contact100">
								<form class="contact100-form validate-form">
									<span class="contact100-form-title">
										Descripción del curso:
									</span>
									<div class="wrap-input100 validate-input" >
										<label class="label-input100" >
										</label>
										<input class="input100" type="text"   name="Descripcion" />
										<span class="focus-input100"></span>
									</div>
									<form class="contact100-form validate-form">
										<span class="contact100-form-title">
											Asignar escuela:
										</span>
										<div class="wrap-input100 validate-input" >
											<label class="label-input100" >
											</label>
											<select  class="input100" name="Escuela_id"><br><br>
												<?php	
													$i = 0 ;
													foreach ($Schools as $value)	{
														echo '<option value=' . '"' . $value['id'] . '"' . ">" ;
														
														echo $value['Escuela']; 
												
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
