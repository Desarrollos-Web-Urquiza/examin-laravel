@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Generar evaluación')

@section('content-profesor')

  <div class="container top-4 bottom-10">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br>
        <h1 class="mt-5">CREE UNA NUEVA EVALUACIÓN</h1>
        <br>
        <!--IMAGEN del telefono y el sobre -->
        <img src={{ asset("/images/evaluacion.png")}} alt="SYMBOL-MAIL"> 
        <!-- FORMULARIO -->
        <form action={{route('generar_preguntas')}} method="GET">
          <div class="container-contact100">
            <div class="wrap-contact100">
              <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                  Título:
                </span>
                <div class="wrap-input100 validate-input" >
                  <label class="label-input100" ></label>
                  <input class="input100" type="text"  placeholder="Título de evaluación:" name="titulo"  required>
                  <span class="focus-input100"></span>
                </div>
                <br>
                <span class="contact100-form-title">
                  Preguntas:
                </span>
                <div class="wrap-input100 validate-input">
                  <label class="label-input100" ></label>
                  <input  class="input100" type="number" name="preguntas" min="1" max="20"placeholder="Número de preguntas:" required >
                  <span class="focus-input100"></span>
                </div>
                <br>
                <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn" type="submit">
                    Crear
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
