<?php include('./Template/header.php');?>
<?php include('./Template/navbar.php');?>
<body>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Coopertura </h1>
      <h3>SLIDER DE IMAGENES O INFORMACION</h3>
      <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="https://www.elcarrocolombiano.com/wp-content/uploads/2021/01/20210124-LOS-10-CARROS-MAS-VENDIDOS-DEL-MUNDO-EN-2020-01.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="https://www.elcarrocolombiano.com/wp-content/uploads/2019/01/20190103-CARROS-NUEVOS-QUE-LLEGARAN-A-COLOMBIA-EN-2019-03.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="https://www.elcarrocolombiano.com/wp-content/uploads/2021/02/20210208-TOP-75-CARROS-MAS-VENDIDOS-DE-COLOMBIA-EN-ENERO-2021-01.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="https://www.elcarrocolombiano.com/wp-content/uploads/2021/01/20210124-LOS-10-CARROS-MAS-VENDIDOS-DEL-MUNDO-EN-2020-01.jpg"></a>
  </div>

<!-- DESPELGABLES DE INFORMACION -->
 <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
  <!-- dropdown desplegable -->
  <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn' href='#' data-target='dropdown1' >Drop Me!</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>


  <!-- HELPEEER -->
  <!-- Element Showed -->
  <BR></BR>
  <a class=' btn'  onclick="$('.tap-target').tapTarget('open')">Necesitas ayuda</a>
  <a id="menu" class="waves-effect waves-light btn btn-floating right" ><i class="material-icons">menu</i></a>

  <!-- Tap Target Structure -->
  <div class="tap-target" data-target="menu">
    <div class="tap-target-content">
      <h5>Title</h5>
      <p>A bunch of text</p>
    </div>
  </div>
          

          <!-- MODALEEES -->
          <BR></BR>
  <!-- Modal Trigger -->
  <a class="waves-effect waves-light waves-blue btn modal-trigger" href="#modal1">TEXTO ASEGURADORA</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>TITULO</h4>
      <p>UN POCO DE DESCRIPCION DEL TEXTO </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
 <hr>
 <br>

 <!--´PARALAX -->
 <div class="parallax-container">
      <div class="parallax"><img src="img/autos/audi1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header">Parallax</h2>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/autos/AUDI2.jfif"></div>
    </div>

<!-- scrooll spy -->
 <div class="row">
    <div class="col s12 m9 l10">
      <div id="introduction" class="section scrollspy">
        <p>Content </p>
      </div>

      <div id="structure" class="section scrollspy">
        <p>Content </p>
      </div>

      <div id="initialization" class="section scrollspy">
        <p>Content </p>
      </div>
    </div>
    <div class="col hide-on-small-only m3 l2">
      <ul class="section table-of-contents">
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#structure">Structure</a></li>
        <li><a href="#initialization">Intialization</a></li>
      </ul>
    </div>
  </div>

  <!-- TABS -->
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
<!-- tooltips -->
<!-- data-position can be : bottom, top, left, or right -->
  <!-- data-tooltip defines the tooltip text -->
  <a class="btn tooltipped" data-position="bottom" data-tooltip="I am a tooltip">Hover me!</a>

      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
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
