@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Crear escuela')

@section('content-profesor')
    
    <!-- Page Content -->
    <div class="container top-10 bottom-10">
		<div class="row">
			<div class="col-lg-12 text-center">
  				<section id="form">
					<!-- TÍITULO-->
					<h1 align= center>CREAR ESCUELA</h1><br>
					<h3 align= center>Coloque el nombre de la escuela que desea crear</h3>
					<!--FORMULARIO-->
					<form action={{route('crear_escuela')}}  name="frmEscuela" method="POST">
						@csrf
	  					<div class="container-contact100">
		  					<div class="wrap-contact100">
			  					<form class="contact100-form validate-form">
				  					<span class="contact100-form-title">
				  						Nombre de la escuela:
				  					</span>
				  					<div class="wrap-input100 validate-input" >
										<label class="label-input100" >
										</label>
										<input class="input100" type="text"   name="escuela" />
										<span class="focus-input100"></span>
									</div>
								</form>
				  				<div class="container-contact100-form-btn">
					  				<button class="contact100-form-btn" type="submit">
						  				SIGUIENTE
					  				</button>
				  				</div>
							</div>
						</div>
			  		</form>
				</section>
		  	</div>
		</div>
	</div> 
  
@endsection
