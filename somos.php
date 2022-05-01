<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<body>
<div class="container">
 <div class="divider"></div>
  <div class="section">
    <h4>Mision</h4>
    <ol class="collection">
      <li class="collection-item">Ofrecemos servicios de Asesoría en Riesgos Individuales, Empresariales y Colectivos</li>
      <li class="collection-item">Anteponemos las necesidades del cliente primero, siempre</li>
      <li class="collection-item">Diseñamos nuestros servicios de acuerdo a las necesidades específicas de cada cliente</li>
      <li class="collection-item">Pensamos innovadoramente, pero actuamos prácticamente</li>
      <li class="collection-item">Ayudamos a nuestros clientes a tomar la decisión de negocio, inversión o Cobertura más informada posible</li>
      <li class="collection-item">Somos un agregado de valor en el  proceso de negociación y contratación, mantenimiento y terminación de cualquier tipo de Contrato de Seguros o Contrato de Fianzas bajo nuestro destacado servicio al cliente y aportando a la promoción de la Cultura de la Prevención</li>
      <li class="collection-item">Entregamos Cobertura y Protección</li>

    </ol>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h4>Valores</h4>
    <ol class="collection">
        <li  class="collection-item">Superación Constante</li>
        <li  class="collection-item">Honestidad y Lealtad</li>
        <li  class="collection-item">Profesionalismo</li>
        <li  class="collection-item">Trabajo en Equipo Multidisciplinario</li>
        <li  class="collection-item">Calidad y eficiencia en el Servicio</li>
    </ol>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h4>Vision</h4>
    <div class="collection">
      <p class="collection-item">Ser una Agencia que se reconozca en el mercado por su alto nivel de servicio y compromiso profesional que su equipo humano entrega en la atención de los riesgos de nuestros clientes para ayudarles a alcanzar sus metas, estableciendo relaciones comerciales duraderas.</p>
    </div>
    
  </div>
  <div class="divider"></div>
 <!--  <div class="section">
    <h4>Alizas estrategicas</h4>
       <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="img/01/logo-GNP-1536x783.jpeg"></a>
    <a class="carousel-item" href="#two!"><img src="img/01/LOGO-ANA-SEGUROS-2048x2048.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/01/Logo-General-de-Seguros.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="IMG/01/IogotipoQualitas-1536x469.png"></a>
    a>
    <a class="carousel-item" href="#four!"><img src="IMG/logos/AZ.png"></a>
    a>
    <a class="carousel-item" href="#four!"><img src="IMG/logos/HDI.png"></a>
    a>
    <a class="carousel-item" href="#four!"><img src="IMG/logos/Zurich.png"></a>
  </div>
  </div> -->
  <?php include('./Template/carrusel.php');?>




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
    fullWidth: false,
    indicators:true,
    duration:500,
    shift:1,
    padding:2
  });

</script>
  </body>
</html>
