<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
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
            <li>Paseo de la Reforma 389 Piso 10, Col. Cuauhtémoc</li>
            <li>Del. Cuauhtémoc, México D.F. CP 06500</li>
            <li>Tel. 55 2750 7699</li>
            <li>info@coopertura.com</li>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6757404980162!2d-99.1724859850934!3d19.426411386887796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff4a3276d717%3A0x121fbf0ac65cc05!2sAv.%20Paseo%20de%20la%20Reforma%20389-Piso%2010%2C%20Cuauht%C3%A9moc%2C%2006500%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1648850041409!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">Telephone</label>
                  </div>
                   <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="tel" class="validate">
                    <label for="icon_email">Mail</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Comentario</label>
                  </div>

                </div>
              </form>
            </div>
        </div>
        <div class="card-action">
          <a href="#" class="btn ">Enviar</a>
          <!-- <a href="#">This is a link</a> -->
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
