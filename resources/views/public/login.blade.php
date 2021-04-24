@extends('layouts.plantilla')

@section('title', 'EXAMIN.AR - Login')

@section('content')

    <!-- Page Content -->
    <div class="container bottom">
		<div class="row">
			<div class="col-lg-12 text-center">
			
				<br>

				<h1 class="mt-5"> ACCEDA A SU CUENTA DE EXAMIN.AR</h1>
				
				<br>
				
				<!--IMAGEN del telefono y el sobre -->
				<div align="center"><img src={{ asset("/images/login.jpg" ) }}></div>
				
				<!-- FORMULARIO -->
				<form action="login.php" method="GET">
				
					<div class="container-contact100">
	
						<div class="wrap-contact100">
							<form class="contact100-form validate-form">
								<span class="contact100-form-title">
									<img src={{ asset("/images/person.png" ) }} alt="SYMBOL-MAIL">  <span style="margin-left: 10px"> Iniciar Sesión</span>
								</span>
								
								<div class="wrap-input100 validate-input" >
									<label class="label-input100" >
									</label>
									<input class="input100" type="text"  placeholder="Ingrese usuario" name="user" >
									<span class="focus-input100"></span>
								</div>
								
								<div class="wrap-input100 validate-input">
									<label class="label-input100" >  
									</label>
									<input  class="input100" type="password" placeholder="Ingrese contraseña"  name="password">
									<span class="focus-input100"></span>
								</div>
	
								<div class="wrap-input100 validate-input" data-validate = "Message is required">
									<span class="focus-input100"></span>
								</div>

								<div class="container-contact100-form-btn">
									<button class="contact100-form-btn" type="submit">
										ACCEDER	
									</button>
								</div>
							</form>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
      
@endsection
