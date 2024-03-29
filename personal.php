<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<body >
<div>
  <div class="marca">
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">directions_car</i></h2>
            <h5 class="center">Autos individual</h5>

            <p class="light">Ofrecemos las mejores soluciones con las aseguradoras mas competitivas  del mercado con el fin de proporcionar Tranquilidad y Seguridad al  conducir. Tenemos coberturas Amplia, Limitada y Responsabilidad civil
            Siempre tenemos una solución para:
            </p>
              <br><a href="#Autos" class="modal-trigger">• Autos</a>
              <br><a href="#Autos" class="modal-trigger">• Camiones</a>
              <br><a href="#Autos" class="modal-trigger">• Taxis y Servicio Público</a>
              <br><a href="#Autos" class="modal-trigger">• Motos</a>
              <br><a href="#Autos" class="modal-trigger">• Autos Legalizados</a>
              <br><a href="#Autos" class="modal-trigger">• Autos Fronterizos y Regularizados</a>
              <br><a href="#Autos" class="modal-trigger">• Autos Turistas</a>
              <br><a href="#Autos" class="modal-trigger">• Autos Antigüos Clásicos</a>
              <br>
              <br>
              <br>
                <?php include('./Template/buttonCotizar.php');?>
          
               
          </div>
        </div>
         <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">local_hospital</i></h2>
            <h5 class="center">GMM</h5>

            <p class="light">Gracias a nuestras Alianzas Estratégicas, contamos con las mejores coberturas del mercado a precios muy competitivos para esos casos de enfermedades o accidentes inesperados que eventualmente pueden llegar a representar una fuerte cantidad de dinero, por lo que ofrecemos flexibilidad de acuerdo cada caso.
              Siempre encontramos una solución a sus necesidades.</p>
              <br><a href="#GMM Planes Individuales" class="modal-trigger">• GMM Planes Individuales</a>
              <br><a href="#GMM PLANES COLECTIVOS" class="modal-trigger">• GMM Planes Colectivos</a>
                
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Accidentes personales</h5>

            <p class="light">Contrato en virtud del cual se ampara la lesión o incapacidad que afecte a la integridad personal, salud o vigor vital del asegurado.</p>
              
          </div>
        </div>

        <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">accessibility</i></h2>
            <h5 class="center">Vida</h5>

            <p class="light">Porque Reconocemos el valor del Factor Humano y su bienestar
                Somos especialistas en la consultoría en cuanto a la protección física del personal de su empresa se refiere, mejorando las condiciones y los costos, amoldando las coberturas a las necesidades específicas de los asegurados y sus beneficiarios.
                Asesoramos desde los beneficios de las pólizas hasta impactos legales positivos que pueden generar para su empresa.
            </p>
              
          </div>
        </div>
      </div>
            <?php include('./Template/FloatingButton.php') ;?>
          </div>
          <br><br>
        </div>
        <!-- FIN DEL CONTAINER -->
      </div>
    </div>
  </div>



  
</div> 
<!-- FIN DEL LA MARCA DE -->
    <?php include('modals_personal.php');?>
  <!-- fin del div principal -->
      <!-- FOOTER SECTION -->
  <?php include('./Template/footer.php') ;?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script type="text/javascript">
  $('.dropdown-trigger').dropdown();
   $('.modal').modal({opacity:0.7});
  $('.tap-target').tapTarget();
  $('.collapsible').collapsible();
  $('.parallax').parallax();
  $('.tabs').tabs();
  $('.tooltipped').tooltip();
  $('.scrollspy').scrollSpy();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  $('.fixed-action-btn').floatingActionButton();

</script>
  </body>
</html>
