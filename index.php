<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<body style="background: linear-gradient(to bottom, #262262, white);">
<div>
  <div class="parallax-container">
      <div class="parallax"><img src="img/autos/audi1.jpg"></div>
    </div>
    <div class="section white">
        
      <div class="row container">
        <!-- <video src="img/video/demo.mp4" width="1280" height="720"  class="col s12 m12" autoplay muted loop></video> -->
        <div class="center">
          <a href="https://autosegurodirecto.com.mx/" class="btn-large waves-effect waves-green center">Cotiza</a>
        </div>
        
        <h2 class="header">Mejoramos cualquier oferta publicada en la web </h2>
        <p class="grey-text text-darken-3 lighten-3"> </p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/autos/AUDI2.jfif"></div>
    </div>


</div>

  <div class="container">
       <div class="row">
    <div class="col s12 m4">
      <div class="card custom-green darken-1">
        <div class="card-content white-text">
          <span class="card-title">TEXTO DE EJEMPLO</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card custom-green darken-1">
        <div class="card-content white-text">
          <span class="card-title">TEXTO DE EJEMPLO</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card custom-green darken-1">
        <div class="card-content white-text">
          <span class="card-title">TEXTO DE EJEMPLO</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
      
    <br><br>
  </div>
  </div>
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
