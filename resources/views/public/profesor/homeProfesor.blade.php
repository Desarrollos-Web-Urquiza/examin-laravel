@extends('layouts.profesor')

@section('title-profesor', 'EXAMIN.AR - Home del profesor')

@section('content-profesor')

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 70px">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url({{ asset('/images/profesor_icono.png')}})">
          <div class="carousel-caption d-none d-md-block">        
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <section class="py-5" >
    <div class="container">
      <h1>¡BIENVENIDO A LA SECCIÓN DEL PROFESOR DE EXAMIN.AR!</h1>
      <br>
      <h2>Esta es la página de su cuenta premium.<h2>
      <h4>
        Recuerde que está accediendo a un módulo exclusivo para profesores destinado a la gestión de alumnos y procesamiento de evaluaciones. Esta página es de acceso restringido.
      </h4>
      <br>
      <br>	
    </div>
  </section>

@endsection
