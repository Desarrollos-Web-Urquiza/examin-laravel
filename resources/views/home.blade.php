@extends('layouts.plantilla')

@section('title', 'EXAMIN.AR - Home')

@section('content')

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/Logo+.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3>EXAMIN.AR</h3>
            <p>Evaluciones online a medida.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/Clase.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3> Evaluciones online </h3>
            <p>Examin.ar facilita la implementación de la tecnología.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/manos1.png')">
          <div class="carousel-caption d-none d-md-block">
            <style>
              .fuentecolorida   {
                color: green;
              }
              
              a h3  {
                text-decoration: none ;
                color: green;
              }             
            </style>              
            
            <div class="fuentecolorida">
            
                <a href="Beneficios.html"><h3>Descubra los beneficios de los que se está perdiendo</h3></a>
                <p>Visite nuestra sección de Beneficios para ver porqué debe suscribirse a nuestra página </p> 
            
            </div>

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

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>¡BIENVENIDO A EXAMIN.AR!</h1>
      <br>
      <h2>¿Qué es EXAMIN.AR?<h2>
      <H4>
        
        Es una empresa dedicada a la venta de evaluaciones "on-line". En EXAMIN.AR, usted encontrará la posibilidad de crear un examen
        para su clase hecho a medida, de la materia que se desee, y con la estructura que usted quiera. Si quiere solicitar su propia cuenta para lograr esto, no tiene que hacer nada más que dejarnos sus datos en
        el módulo de "Contacto" y al cabo de un tiempo nosotros nos contactaremos con usted.<br> ¿No está seguro de solicitar nuestros servicios? Visite nuestra sección "Beneficios de usar EXAMIN.AR".<br><br>	

        <!-- Botón de Beneficios -->
        <a class="btn btn-primary btn-lg" href="Beneficios.html">Beneficios de EXAMIN.AR</a>
 
      </H4>
    </div>
  </section>

@endsection
