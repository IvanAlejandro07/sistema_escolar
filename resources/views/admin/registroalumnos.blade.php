<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Registro Alumnos</title>
    
    <!-- Bootstrap core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../assets/css/lightbox.css">
<!--TemplateMo 557 Grad School https://templatemo.com/tm-557-grad-school-->
</head>
<body>

    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="#"><em>Edu</em> Portal</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section class="section coming-soon" data-section="section3">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-xs-12">
              <div class="continer centerIt">
                <div>
                  <h4>¡Bienvenid@ al <em>apartado de registro de alumnos</em>!</h4>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="right-content">
                <div class="top-content">
                  <h6>Complete el <em>siguiente formulario</em> para registrar al alumno(a):</h6>
                </div>
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nombre completo" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Correo electrónico" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                          <input name="group" type="text" class="form-control" id="group" placeholder="Grupo" required="">
                        </fieldset>
                      </div>
                    <div class="col-md-12">
                        <fieldset>
                          <input name="address" type="text" class="form-control" id="address" placeholder="Dirección" required="">
                        </fieldset>
                      </div>
                    <div class="col-md-12">
                        <fieldset>
                          <input name="registrationnumber" type="text" class="form-control" id="registrationnumber" placeholder="Matrícula" required="">
                        </fieldset>
                      </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Agregar</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section video" data-section="section5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <div class="left-content">
                <span>¡Gracias por visitar nuestro sitio!</span>
                <h4>¿Quieres conocer más acerca de la <em>Universidad Tecnológica de Coahuila</em>?</h4>
                <br>El 27 de febrero del 1997, el entonces Presidente de la República Mexicana, Ernesto Zedillo Ponce de León, inauguró las instalaciones de la Universidad Tecnológica de Coahuila en la ciudad de Ramos Arizpe, estableciendo así un serio compromiso de colaboración entre los sectores productivo y educativo.</p>
                <div class="main-button"><a rel="nofollow" href="https://www.utc.edu.mx/index.php/conoce-utc/historia" target="_parent">Conoce Más</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <article class="video-item">
                <div class="video-caption">
                  <h4>Universidad Tecnológica de Coahuila</h4>
                </div>
                <figure>
                  <a href="https://www.youtube.com/watch?v=cQzIgA5IUMY" target="_blank"><img src="assets/images/utc.jpeg"></a>
                </figure>
              </article>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p><i class="fa fa-copyright"></i> Copyright 2024 | Diseño: <a href="https://utc.edu.mx/" rel="sponsored" target="_parent">Grupo 7IDGSB</a></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../../assets/js/isotope.min.js"></script>
    <script src="../../../assets/js/owl-carousel.js"></script>
    <script src="../../../assets/js/lightbox.js"></script>
    <script src="../../../assets/js/tabs.js"></script>
    <script src="../../../assets/js/video.js"></script>
    <script src="../../../assets/js/slick-slider.js"></script>
    <script src="../../../assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
    
</body>
</html>