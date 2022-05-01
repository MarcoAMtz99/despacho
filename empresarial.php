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
        <div class="col s12 m4" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text pulse"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Riesgos empresariales</h5>

            <p class="light">
              <br><a href="#GMM Planes Colectivos" class="modal-trigger">• GMM Planes Colectivos</a>
              <br><a href="#Cobertura Básica PyMe" class="modal-trigger">•Cobertura Básica PyMe y Empresarial </a>
              <br><a href="#Servicio Publico"  class="modal-trigger">• Servicio Público</a>
              <br><a href="#Responsabilidad Civil Y Riesgos Profesionales"  class="modal-trigger">• Responsabilidad Civil Y Riesgos Profesionales</a>
              <br><a href="#Seguro Agrícola"  class="modal-trigger"> • Seguro Agrícola</a>
              <br><a href="#Seguro de animales"  class="modal-trigger"> • Seguro de Animales</a>
              <br><a href="#Seguro de credito"  class="modal-trigger">• Seguro de Crédito</a>
              <br><a href="#flotillas"  class="modal-trigger">• Seguro de Automóviles (Flotillas).</a>
              </p>
              <?php include('./Template/buutonContacto.php');?>
          </div>
        </div>

        <div class="col s12 m4" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Ramos tecnicos</h5>

            <p class="light">El objetivo de éste seguro es la protección de los activos de la empresa en maquinaria o equipo electrónico ante los siguientes riesgos:</p>

                <a href="#Rotura de calderas" class="modal-trigger">• Rotura de maquinaria</a> 
                <br><a href="#Seguro de Calderas" class="modal-trigger">• Calderas y recipientes sujetos a presión</a> 
                <br><a href="#Equipo electrico" class="modal-trigger">• Equipo electrónico</a> 
                <br><a href="#Equipo de contratista" class="modal-trigger">• Equipo de Contratista o Maquinaria Pesada</a> 
                <br><a href="#Seguro de Montaje" class="modal-trigger">• Seguro de Montaje</a> 
                <br><a href="#Seguro de Obra Civil" class="modal-trigger">• Seguro de Obra Civil</a> 
                <?php include('./Template/buutonContacto.php');?>
          </div>
        </div>

        <div class="col s12 m4" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Vida empresarial</h5>

            <p class="light">Porque Reconocemos el valor del Factor Humano y su bienestar
                Somos especialistas en la consultoría en cuanto a la protección física del personal de su empresa se refiere, mejorando las condiciones y los costos, amoldando las coberturas a las necesidades específicas de los asegurados y sus beneficiarios.
                Asesoramos desde los beneficios de las pólizas hasta impactos legales positivos que pueden generar para su empresa.
            </p>
            <?php include('./Template/buutonContacto.php');?>
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

  </div>
  <?php include('modals_empresariales.php');?>
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

</script>
  </body>
</html>
