@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Generar evaluación')

@section('content-profesor')

<!-- Page Content -->
<div class="container top-4">
  <div class="row">
    <div class="col-lg-12 text-center">
      <br>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <h1 class="mt-5">	SELECCIONE TÍTULO DE EVALUCIÓN Y ALUMNO QUE LA REALIZA	</h1>
      <br>
      <!--IMAGEN del telefono y el sobre -->
      <img src={{ asset("/images/evaluacion2.png")}} alt="SYMBOL-MAIL"> 
      <!--FORMULARIO-->
      <form action="responder_preguntas.php" class="contact_form" method="POST">
        <div class="container-contact100">
          <div class="wrap-contact100">
            <form class="contact100-form validate-form">
              <span class="contact100-form-title">
                Seleccione evaluación:
              </span>
              <div class="wrap-input100 validate-input" >
                <label class="label-input100" >
                </label>
                <select  class="input100" name="evaluacion">
                </select>
                <span class="focus-input100"></span>









    </div>

  
  <form class="contact100-form validate-form">

  <span class="contact100-form-title">
    Seleccione el alumno que la realiza:
    <div class="wrap-input100 validate-input" >
        <label class="label-input100" >
          
        </label>
      
      <select class="input100"  name="Alumno">
      

      <span class="focus-input100"></span>

      </select>

      <span class="focus-input100"></span>
  
    </div>







<form class="contact100-form validate-form">

  <span class="contact100-form-title">
Elija el DNI correspondiente del alumno seleccionado en la lista anterior:
    <div class="wrap-input100 validate-input" >
        <label class="label-input100" >
          
        </label>




    
    <select  class="input100" name="DNI"><br><br>
   
    </select>
    




<span class="focus-input100"></span>

      </select>

      <span class="focus-input100"></span>
  
    </div>


  
















  

    <div class="container-contact100-form-btn">
      <button class="contact100-form-btn" type="submit">
        Hacer evaluación
      </button>
    
    </div>
  </form>
</div>
</div>
  
 
 
  
  
  
  
  
  
  
  
  
    </div>
  </div>
</div>



















<br>
<br>
<br>
<br>
<br>



</form>



@endsection
