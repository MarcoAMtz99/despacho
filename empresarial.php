<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<body >
<div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
   
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Riesgos empresariales</h5>

            <p class="light">
              <br><a href="#">• GMM Planes Colectivos</a>
              <br><a href="#">• Cobertura Básica PyMe y Empresarial</a>
              <br><a href="#">• Servicio Público</a>
              <br><a href="#">• Responsabilidad Civil Y Riesgos Profesionales</a>
              <br><a href="#"> • Seguro Agrícola</a>
              <br><a href="#"> • Seguro de Animales</a>
              <br><a href="#">• Seguro de Crédito</a>
              <br><a href="#">• Seguro de Automóviles (Flotillas).</a>
              </p><a href="#"></a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Ramos tecnicos</h5>

            <p class="light">El objetivo de éste seguro es la protección de los activos de la empresa en maquinaria o equipo electrónico ante los siguientes riesgos:</p>

                <a href="#">• Rotura de maquinaria</a> 
                <br><a href="#">• Calderas y recipientes sujetos a presión</a> 
                <br><a href="#">• Equipo electrónico</a> 
                <br><a href="#">• Equipo de Contratista o Maquinaria Pesada</a> 
                <br><a href="#">• Seguro de Montaje</a> 
                <br><a href="#">• Seguro de Obra Civil</a> 

          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Vida empresarial</h5>

            <p class="light">Porque Reconocemos el valor del Factor Humano y su bienestar
                Somos especialistas en la consultoría en cuanto a la protección física del personal de su empresa se refiere, mejorando las condiciones y los costos, amoldando las coberturas a las necesidades específicas de los asegurados y sus beneficiarios.
                Asesoramos desde los beneficios de las pólizas hasta impactos legales positivos que pueden generar para su empresa.
            </p>
          </div>
        </div>
      </div>

          </div>
          <br><br>
        </div>
        <!-- FIN DEL CONTAINER -->
      </div>
    </div>
  </div>
  <!-- fin del div principal -->
      <!-- FOOTER SECTION -->
  <?php include('./Template/footer.php') ;?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script type="text/javascript">
  $('.dropdown-trigger').dropdown();
   $('.modal').modal();
  $('.tap-target').tapTarget();
  $('.collapsible').collapsible();
  $('.parallax').parallax();
  $('.tabs').tabs();
  $('.tooltipped').tooltip();
  $('.scrollspy').scrollSpy();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });

</script>
  </body>
</html>
