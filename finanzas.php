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
        <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">face</i></h2>
            <h5 class="center">Fianzas de fidelidad</h5>

            <p class="light">Garantía por medio de la cual se va a resarcir al dueño de la empresa del daño patrimonial por actos ilícitos cometidos por sus empleados, respecto a acciones como; abuso de confianza, fraude, robo y peculado. Y que irremediablemente ocasionarán un quebranto económico. 
            Se pueden contratar como:

            </p>
              <br><a href="#Fianza de Fidelidad Individuales" class="modal-trigger">•Fianza de Fidelidad Individuales</a>
              <br><a href="#Fianzas de Fidelidad Colectivas"  class="modal-trigger">•Fianzas de Fidelidad Colectivas</a>
          </div>
        </div>
          <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">folder_shared</i></h2>
            <h5 class="center">Fianzas Administrativas</h5>

            <p class="light">Garantía de las obligaciones contractuales como: </p>
              <br><a href="#De obra" class="modal-trigger">•De obra</a>
              <br><a href="#Otras fianzas administrativas" class="modal-trigger">•Otras fianzas administrativas</a>
              <br><a href="#" class="modal-trigger">•De Servicios</a>
              <br><a href="#De obra" class="modal-trigger">•De proveeduría o Suministros</a>
              <br><a href="#Fiscales" class="modal-trigger">•Fiscales</a>
              <br><a href="#De Arrendamiento inmobiliario" class="modal-trigger">•De Arrendamiento inmobiliario</a>

           
          </div>
        </div>

       

      </div>
      <div class="row">
        <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">credit_card</i></h2>
            <h5 class="center">Fianzas de Credito</h5>

            <p class="light">Se garantiza el pago de un crédito o financiamiento obtenido para la adquisición de bienes o servicios o el desarrollo de proyectos. </p>

          </div>
        </div>

      <!-- AQUI VA -->
        <div class="col s12 m6" style="text-align:justify;">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">folder_open</i></h2>
            <h5 class="center">Fianzas Judiciales</h5>

            <p class="light">Garantiza el cumplimiento de las obligaciones específicas solicitadas por particulares dentro de un procedimiento judicial; también de lo que el juez o la ley obliguen a un particular a garantizar un acto procesal concreto.
Para mayores informes, por favor contacte a uno de nuestros asesores.
</p>
              <!-- <br><a href="#">• GMM Planes Individuales</a>
              <br><a href="#">• GMM Planes Colectivos</a> -->
              
          </div>
        </div>
      </div>
      <div class="row">
           <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">insert_emoticon</i></h2>
            <h5 class="center">Fianzas de Garantia</h5>

            <p class="light">Colocación en el mercado afianzador de servicios profesionales prestados como Institución Fiduciaria para la administración profesional de un fideicomiso. Se pueden encontrar de dos formas: </p>
             <br>•  <strong>• Relacionado con Pólizas de Fianzas </strong>
              <br>• <strong>•Sin Relación a pólizas de Fianzas</strong>


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
  <?php include('modals_fianzas.php');?>
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
