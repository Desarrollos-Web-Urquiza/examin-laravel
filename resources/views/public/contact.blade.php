@extends('layouts.plantilla')

@section('title', 'EXAMIN.AR - Contacto')

@section('content')

  <!--FORMULARIO---->
  <form action="mailto:contacto@examin.ar" name="frmContacto" method="post"  >
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          
          <br>

          <h1 class="mt-5">CONTACTE CON NOSOTROS</h1>
      
          <br>
          
          <!--IMAGEN del telefono y el sobre -->
          <div align="center">
            <img src={{ asset("/images/contacto.jpg" ) }}>
          </div> 
        
          <div class="container-contact100">
            
            <div class="wrap-contact100">
              
              <form class="contact100-form validate-form">
                
                <span class="contact100-form-title">
                  Déjenos sus datos personales aquí y atenderemos sus dudas en cuanto podamos
                </span>
                
                <div class="wrap-input100 validate-input" >
                  
                  <label class="label-input100" > 
                    <!-- PÁGINA PARA LOS ICONOS:   https://www.freepik.es/search?selection=1&sort=popular&type=icon&format=search&page=10-->
                    <img src= {{ asset("/images/121693.png" ) }} alt="SYMBOL-MAIL">
                  </label>
                  
                  <input class="input100" type="text" name="Nombre" placeholder="Escriba su nombre"  onblur="revisarNombre()">
                  
                  <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input">
  
                  <label class="label-input100" >
                    <img src={{ asset("/images/121693.png" ) }} alt="SYMBOL-MAIL">
                  </label>
                  
                  <input  class="input100" type="text" name="Apellido" placeholder="Escriba su apellido" onblur="revisarApellido()">
                  
                  <span class="focus-input100"></span>
                
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                  <label class="label-input100" for="email">
                    <img src={{ asset("/images/60381.png" ) }} alt="SYMBOL-MAIL">
                  </label>
                  <input id="email" class="input100" type="text" name="Mail" placeholder="Escriba su e-mail" onblur="RevisarEmail()">
                  <span class="focus-input100"></span>
                </div>
              
                <div class="wrap-input100 validate-input">
                  <label class="label-input100" >
                    <img src={{ asset("/images/33962.png" ) }} alt="SYMBOL-MAIL">
                  </label>
                  <input  class="input100" type="text" name="Telefono" placeholder="Escriba su teléfono" onblur="RevisarTelefono()">
                  <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                  <textarea class="input100" name="Consulta" placeholder="Su consulta (Sea breve, por favor)"></textarea>
                  <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn" onclick="validar()">
                    ENVIAR
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

    <script>

      /*FUNCIONES DE VALIDACIÓN*/
      function revisarNombre()  {
        S=document.frmContacto.Nombre.value
        if (S.length < 3) {
          alert('El nombre debe tener como mínimo 3 caracteres')
          document.frmContacto.Nombre.value= ""
        }
      }
      function revisarApellido()  {
        S=document.frmContacto.Apellido.value
        if (S.length < 3) {
          alert('El apellido debe tener como mínimo 3 caracteres')
          document.frmContacto.Apellido.value= ""
        }
      }
      function RevisarEmail() {

        S=document.frmContacto.Mail.value
        
        if (S.length < 8) {
          alert('El mail debe tener como mínimo 8 caracteres')
          document.frmContacto.Mail.value= ""
        } else  {
          
          A=document.frmContacto.Mail.value.indexOf("@")
          B=document.frmContacto.Mail.value.indexOf(".")
          
          if (A==-1 || B==-1)/*¿Existe "@" y "."?*/ {
            alert("El mail debe tener al menos un '@' y un '.' ")
            document.frmContacto.Mail.value=""
          }
          
        }
      }

      function RevisarTelefono()  {

        S=document.frmContacto.Telefono.value
        
        if (S.length < 6) {
          alert('El teléfono debe tener como mínimo 6 números')
          document.frmContacto.Telefono.value= ""
        } else  {
          if (!/^([0-9])*$/.test(S))  {
            alert('Lo que acaba de ingresar no son números. Asegúrese de escribir solo números sin espacios ni signos de puntuación')
            document.frmContacto.Telefono.value= ""
          }
        }

      }

      function validar()  {
      
        nombre=document.frmContacto.Nombre.value
        Apellido=document.frmContacto.Apellido.value
        Mail=document.frmContacto.Apellido.value
        Mail=document.frmContacto.Mail.value
        Tel=document.frmContacto.Telefono.value
        
        if (nombre!="" && Apellido!="" && Mail!="" && Tel!="")  {
          document.frmContacto.submit();
          console.log("submit")
        }	else  {
          alert('Los datos están incompletos. Asegúrese de rellenar todos los campos correctamente')
          console.log("alert")
        }
        
      }

    </script>
  </form>
      
@endsection
