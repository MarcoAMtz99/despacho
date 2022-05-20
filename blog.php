<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<body >
<div>
 <div class="marca">
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">

  <div class="container">
    <div class="section">

      <!--Icon Section-->
     <div class="row">
     <div class="col s12 m12 justify">
      <div class="card custom-delay-blue  darken-1 z-depth-5" >
        <div class="card-content white-text">
          <strong><span class="card-title">¿CUÁL ES LA VENTAJA DE UN SEGURO DE AUTO?</span></strong>
          <br>
          <p>Esperamos que nunca nos necesites, pero en caso que sí, estamos a un click, llamada o chat de distancia.</p>
          Esta es una pregunta constante en los conductores al considerar la contratación de un aparente “costoso” seguro de auto, así como la desconfianza en el pago real ante un percance vial.
              Esas dudas y desconfianza usualmente se deben al desconocimiento del funcionamiento de la póliza de Auto y de los servicios que están presentes en la póliza, los cuales están <a href="./articulo1.php">...</a>
        </div>
        <div class="card-action  ">
          <a href="./articulo1.php" class="white-text">Leer mas</a>
          
        </div>
      </div>
    </div>
  </div>>
      
     
            <?php include('./Template/FloatingButton.php') ;?>
          </div>
          <br><br>
        </div>
        <!-- FIN DEL CONTAINER -->
      </div>
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
  $('.fixed-action-btn').floatingActionButton();

</script>
  </body>
</html>
