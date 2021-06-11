@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Buscar evaluación')

@section('content-profesor')
  <?php
    echo $data['tests'];
    // $i = 0 ;
    // foreach ($data['students'] as $value)	{
    //   echo $value['NombreyApellido'];
    //   $i++ ;
    // } 
  ?>
  <!-- Page Content -->
  <div class="container top-4 bottom-5">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br>
        <h1 class="mt-5">	SELECCIONE TÍTULO DE EVALUCIÓN Y ALUMNO QUE LA REALIZA	</h1>
        <br>
        <!--IMAGEN del telefono y el sobre -->
        <img src={{ asset("/images/evaluacion2.png")}} alt="SYMBOL-MAIL"> 
        <!--FORMULARIO-->
        <form action={{route('')}} class="contact_form" method="POST">
          <div class="container-contact100">
            <div class="wrap-contact100">
              <span class="contact100-form-title">
                Seleccione evaluación:
              </span>
              <div class="wrap-input100 validate-input" >
                <label class="label-input100" >
                </label>
                <select  class="input100" name="evaluacion">
                  <?php
                    foreach ($data['tests'] as $value)	{
                      echo '<option value='. '"' . $value['Titulo'] . '"' . ">" ;
                      echo $value['Titulo']; 
                      echo "</option>" ;
                    } 
                  ?>
                </select>
                <span class="focus-input100"></span>
              </div>
              <span class="contact100-form-title">
                Seleccione el alumno que la realiza:
              </span>
              <div class="wrap-input100 validate-input" >
                <label class="label-input100" >
                </label>
                <select class="input100"  name="Alumno">
                  <span class="focus-input100"></span>
                  <?php
                    foreach ($data['students'] as $value)	{
                      echo '<option value='. '"' . $value['NombreyApellido'] . '"' . ">" ;
                      echo $value['NombreyApellido']; 
                      echo "</option>" ;
                    } 
                  ?>
                </select>
                <span class="focus-input100"></span>
              </div>
              <span class="contact100-form-title">
                Elija el DNI correspondiente del alumno seleccionado en la lista anterior:
              </span>
              <div class="wrap-input100 validate-input" >
                <label class="label-input100" >  
                </label>
                <select  class="input100" name="DNI"><br><br>
                  <span class="focus-input100"></span>
                  <?php
                    foreach ($data['students'] as $value)	{
                      echo '<option value='. '"' . $value['DNI'] . '"' . ">" ;
                      echo $value['DNI']; 
                      echo "</option>" ;
                    } 
                  ?>
                </select>
              </div>
              <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" type="submit">
                  Hacer evaluación
                </button>
              </div> 
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 
@endsection
