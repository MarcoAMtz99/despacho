<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<style>
  .map-responsive{

    overflow:hidden;

    padding-bottom:56.25%;

    position:relative;

    height:0;

}

.map-responsive iframe{

    left:0;

    top:0;

    height:100%;

    width:100%;

    position:absolute;

}
</style>
<body style="background: linear-gradient(to bottom, #262262, white);">
<div>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>

    <div class="row">
    <div class="col s12 m4">
      <div class="card indigo darken-3">
        <div class="card-content white-text">
          <span class="card-title"><strong>Direccion</strong></span>
          <ul>
          
            <li>Torcuato Tasso 245 Of. 404A </li>
            <li>Col. Polanco Reforma, Miguel Hidalgo </li>
            <li>CDMX, CP 11560 </li>
            <li>5562758686</li>
          </ul>
        </div>
        <div class="card-action">
          
        </div>
      </div>
    </div>

 

    <div class="col s12 m8">
      <div class="card custom-green darken-1">
        <div class="card-content white-text center">
          <span class="card-title"><strong>Ubicacion</strong></span>
          <br>
          <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5067113067153!2d-99.18579928520039!3d19.433708245681252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8ac886cb0d7%3A0xf940a725b7a31393!2sTorcuato%20Tasso%20245-404a%2C%20Polanco%2C%20Polanco%20V%20Secc%2C%20Miguel%20Hidalgo%2C%2011550%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1649560860687!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        
        </div>
        
      </div>
    </div>
  </div>
      
    <div class="col s12 m12">
      <div class="card indigo darken-3">
        <div class="card-content white-text">
          <span class="card-title"><strong>Contactanos</strong></span>
          <!-- FORMULARIO -->
          <div class="row">
              <form class="col s12" action="./mail.php" method="post">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" name="nombre" class="validate"  minlength="5" maxlength="15" required>
                    <label for="icon_prefix">Nombre</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" name="telefono" class="validate" maxlength="10">
                    <label for="icon_telephone">Telefono</label>
                  </div>
                   <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="email" name="email" class="validate" required>
                    <label for="icon_email">Mail</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2"  name="desccripcion" class="materialize-textarea" required pattern="[A-Za-z0-9]+"></textarea>
                    <label for="icon_prefix2">Comentario</label>
                  </div>

                </div>
                  <div class="card-action">
                 <input type="submit" class="btn" value="Envar">
                <!-- <a href="#">This is a link</a> -->
              </div>
              </form>
            </div>
        </div>
      
      </div>
    </div>




              </div>
              <!-- FIN DEL CONTAINER -->
          </div>
      </div> 
<!-- FIN DEL DIV POST BODY -->
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
