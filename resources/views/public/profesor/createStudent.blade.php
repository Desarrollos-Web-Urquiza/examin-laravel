@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Crear alumno')

@section('content-profesor')
 
    <!-- Page Content -->
    <div class="container top-10 bottom-5">
      <div class="row">
        <div class="col-lg-12 text-center">
          <section id="form">
            <!-- TÍITULO-->
            <h1 align="center">CREAR ALUMNO - PASO 1</h1><br>
            <h3 align="center">Especifique nombre, apellido, DNI y escuela del alumno a crear</h3>
            <!--FORMULARIO-->
            <form action="crear_alumno2" class="contact_form" method="GET">
	            <div class="container-contact100">
                <div class="wrap-contact100">
                  <form class="contact100-form validate-form">
                    <span class="contact100-form-title">    
                      Nombre y apellido:
                    </span>
                    <div class="wrap-input100 validate-input" >
                      <label class="label-input100" >     
					            </label>
                      <input class="input100" type="text"   name="NombreyApellido" >
                      <span class="focus-input100"></span>
				            </div>
			              <span class="contact100-form-title">
                      DNI:
                    </span>
                    <div class="wrap-input100 validate-input" >
                      <label class="label-input100" >	
					            </label>
                      <input class="input100" type="text"   name="DNI" >
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
                              echo '<option value=' . '"' . $value['id'] . "&" . $value['Escuela'] . '"' . ">" ;
                              
                              echo $value['Escuela']; 
                          
                              echo "</option>" ;
                              $i++ ;
                            } 
                          ?>
                        </select>
				              </div>
				              <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn" type="submit">
                          SIGUIENTE
                        </button>
				              </div>
			              </form>
                  </div>
                </div>
              </div>
            </form>
          </section> 
        </div>
      </div>
    </div>

@endsection
