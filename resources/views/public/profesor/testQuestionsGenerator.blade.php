@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Generar evaluación')

@section('content-profesor')
  <?php
    $titulo = $_GET["titulo"] ;
    $preguntas = $_GET["preguntas"] ;
  ?>
  <div class="container top-4 bottom-10">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br>
        <h1 class="mt-5">INGRESE LAS PREGUNTAS</h1>
        <br>
        <!--FORMULARIO-->
	      <form action={{route('crear_evaluacion')}} class="contact_form" method="POST">
          @csrf
          <!--IMPRIME TITULO DE EVALUCACION EN PANTALLA-->
          <h3> <?php echo $titulo  ; ?> </h3>	
          <?php
            /*EL BUCLE "FOR" IMPRIME TANTOS "INPUTS" COMO SE HAYA INGRESADO EN LA PÁGINA ANTERIOR ("generar_evaluacion")*/
            for ($i=1; $i <= $preguntas ; $i++   ) { 		
          ?>
          <br><br>	Pregunta <?php echo $i; ?><br><br>        
          <div class="wrap-input100 validate-input" >
            <label class="label-input100" >		
            </label>
            <input class="input100" type="text" placeholder="Coloque pregunta"  name="p<?php echo $i ; ?>"  > 
            <span class="focus-input100"></span>
          </div>
          <br><br>
          <hr size="5px" width="100%" align="center" color="#4272d7"/>
          <?php } ?>
          <br>
          <input name="Titulo" type="hidden" value="<?php echo $titulo ; ?>" >
          <input name="Preguntas" type="hidden" value="<?php echo $preguntas ; ?>" >
          <!--BOTÓN DE SUBMIT-->
          <div align="right">
            <input class="btn btn-primary btn-lg" type="submit" value="Insertar" /> 
          </div>
	      </form>
      </div>
    </div>
  </div>

@endsection
