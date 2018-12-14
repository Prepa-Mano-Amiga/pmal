<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Imperial Boootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate-css/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="Imperial">
        </div>

        <h1>Bienvenidos A Mano Amiga Lerma</h1>
        <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Get Strated</a>
          <a href="#services" class="btn-services">Our Services</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          <!--
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          -->
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="{{URL::action('login@login')}}">Iniciar Sesión</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nosotros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Preparatoria Mano Amiga Lerma</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h5 class="about-title">Juntos Trasformando Vidas</h5>
          <p class="about-text">
          Mano Amiga es una obra de caridad del Regnum Christi que promueve el desarrollo integral de las personas con menos oportunidades, a través de la educación como motor principal para romper el círculo de la pobreza, complementada con apoyos básicos de salud y crecimiento económico con el fin de lograr la transformación positiva de la sociedad.
          Somos una red de centros educativos católicos con años de experiencia y resultados positivos para la transformación de la sociedad por medio de la educación. Llevamos más 50 años desde la apertura del primer Colegio (Mano Amiga Zomeyucan) y hemos beneficiado a miles de alumnos y sus familias.
          Generamos valor para cada uno de los que colaboran en el proyecto, alumnos, padres de familia, maestros, administrativos, bienhechores, padrinos y colaboradores en general, logrando así un beneficio integral para la sociedad.
          Vivimos el amor al prójimo atendiendo con actitud de servicio, calidad y calidez a todos los que somos parte del proyecto. Nos consideramos integrantes de una familia y logramos permear esto en nuestros colegios ofreciéndole a los alumnos y a las familias un espacio seguro de desarrollo.
          En Mano Amiga trabajamos 1,200 personas y contamos con el apoyo de una red sólida de bienhechores, padrinos de becas y empresas que nos apoyan con donativos, así como el respaldo de nuestros colegios hermanos y del Regnum Christi. Gracias a ello hemos logrado crecer en calidad, transformado la vida de más de 14mil alumnos en nuestros 21 colegios por todo el país.
          </p>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-4  service-item">
          <h5 class="about-title">Misión</h5>
          <p class="about-text">
            Transformar la vida de las personas que tienen menos oportunidades a través de la formación integral.
          </p>
        </div>

        <div class="col-md-4  service-item">
          <h5 class="about-title">Visión</h5>
          <p class="about-text">
            Ser reconocidos como un motor de cambio positivo para todos nuestros beneficiarios por nuestra eficacia en la transformación de la sociedad a través de un modelo de educación integral.
          </p>
        </div>
      </div>
  </section>

  <!--==========================
  Seccion de numeros 
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Numeros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Mano amiga en números.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-line-chart"></i></div>
          <h4 class="service-title"><a href="">51</a></h4>
          <p class="service-description">Años de experiencia</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-institution"></i></div>
          <h4 class="service-title"><a href="">22</a></h4>
          <p class="service-description">Colegios en toda la república.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">14</a></h4>
          <p class="service-description">Mil alumnos.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-child"></i></div>
          <h4 class="service-title"><a href="">2850</a></h4>
          <p class="service-description">Alumnos de preescolar.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-child"></i></div>
          <h4 class="service-title"><a href="">7350</a></h4>
          <p class="service-description">Alumnos de primaria.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-child"></i></div>
          <h4 class="service-title"><a href="">2750</a></h4>
          <p class="service-description">Alumnos de secundaria.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-child"></i></div>
          <h4 class="service-title"><a href="">1050</a></h4>
          <p class="service-description">Alumnos de preparatoria.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-group"></i></div>
          <h4 class="service-title"><a href="">10</a></h4>
          <p class="service-description">Mil familias atendidas.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-briefcase"></i></div>
          <h4 class="service-title"><a href="">1200</a></h4>
          <p class="service-description">Empleados.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-handshake-o"></i></div>
          <h4 class="service-title"><a href="">4500</a></h4>
          <p class="service-description">Padrinos.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-graduation-cap"></i></div>
          <h4 class="service-title"><a href="">9</a></h4>
          <p class="service-description">Mil egresados.</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
  
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h4 class="subscribe-title">Nuestro Modelo Educativo</h4>
          <p class="subscribe-text">
          Mano Amiga es un centro de formación integral donde niños y jóvenes necesitados reciben las herramientas que requieren para convertirse en personas exitosas. El programa pedagógico y todos sus programas de apoyo buscan desarrollar de forma armoniosa y jerarquizada los cuatro ámbitos de la persona: espiritual, intelectual, humano y social.
          <br><br>
          Nos enfocamos en los intereses del niño o joven y en sus procesos cognitivos, afectivos y psicomotrices. Buscamos que todos los alumnos encuentren una mayor motivación hacia el aprendizaje continuo y desarrollo permanente de sus competencias, como un reto y una aventura para toda la vida. Los contenidos de los programas se trabajan y adaptan al avance, a los ritmos y a las necesidades e intereses de los estudiantes.
          <br><br>
          Entre los programas de apoyo, están las academias deportivas y clubes para el desarrollo del liderazgo, además, cada colegio ofrece programas de formación para padres de familia, cursos de valores, programas especializados, etc.
          </p>
          <h4 class="subscribe-title">Nuestro Modelo de Impacto</h4>
          <img src="img/modelo-de-impacto.jpg" alt="" width="800" height="700"> 
          <h4 class="subscribe-title">Nuestros Beneficiarios</h4>
          <p class="subscribe-text">
          Aunque en el centro de nuestro modelo se encuentran los alumnos de Mano Amiga, también reconocemos que 
          transformamos a otros grupos.
          </p>

          <div class="row">
        <div class="col-md-6 subscribe-item">
          <div class="subscribe-icon"><i class="fa fa-group"></i></div>
          <h4 class="subscribe-title2"><a href="">ALUMNOS</a></h4>
          <p class="subscribe-description">Reconocen que estudiando en Mano Amiga contarán con una formación integral
             que les ayudará a salir adelante en su vida, encontrando en las aulas un alto nivel de excelencia 
             académica cimentada en valores pero con cuotas accesibles. Se les inculca un deseo de superación 
             personal y un liderazgo positivo siempre puesto al servicio de los demás. También sienten que forman 
             parte no sólo de la red de colegios Mano Amiga, sino cuentan con una identidad y sentido de pertenencia
              a la familia del Regnum Christi.</p>
        </div>
        <div class="col-md-5 subscribe-item">
          <div class="subscribe-icon"><i class="fa fa-line-chart"></i></div>
          <h4 class="subscribe-title2"><a href="">COMUNIDAD</a></h4>
          <p class="subscribe-description">Las comunidades que rodean a un Colegio Mano Amiga, reconocen la 
            transformación del entorno del cual el colegio es motor, agradecen poder contar con personas íntegras 
            trabajando por una mejor sociedad, también cuentan con programas de impacto social, actitudes cívicas 
            formidables, mayor participación en las diferentes actividades de la comunidad y una mayor conciencia 
            social de apoyo y desarrollo de todos los que integran el entorno. </p>
        </div>
        <div class="col-md-6 subscribe-item">
          <div class="subscribe-icon"><i class="fa fa-group"></i></div>
          <h4 class="subscribe-title2"><a href="">FAMILIAS</a></h4>
          <p class="subscribe-description">Las familias son las primeras en verse beneficiadas por el modelo 
            de Mano Amiga ya que no sólo sus hijos se desarrollan mejor sino encuentran una educación de calidad
             cimentada en valores a cuotas que pueden pagar y reconocen que no podrían tener acceso a ese nivel de 
             educación tan accesible de otra forma. Los padres de familia encuentran en el Colegio un apoyo y motor 
             para superarse y salir adelante gracias a cursos psicológicos, profesionales y sobre cómo ser mejor padre. 
          </div>
          <div class="col-md-6 subscribe-item">
          <div class="subscribe-icon"><i class="fa fa-handshake-o"></i></div>
          <h4 class="subscribe-title2"><a href="">BIENHECHORES</a></h4>
          <p class="subscribe-description">Aquellas empresas, personas o padrinos que apoyan a Mano Amiga reconocen
             que la transformación no sólo es hacia los niño sino también hacia ellos. Ven en los colegios un alto
              impacto social y un rápido retorno de inversión, logrando ampliar el beneficio por cada peso invertido 
              en nosotros, asegurando el futuro no sólo de los alumnos sino de la misma comunidad. También cumplen 
              con a obligación y deseo moral de trabajar con los que tienen menos oportunidades y desean ser solidarios. 
              En Mano Amiga encuentran transparencia y rendición de cuentas con estado financieros y reportes puntuales
               que los ayudan a tener confianza y claridad para seguir apoyándonos por muchos años más. 
          </div>
          <div class="col-md-6 subscribe-item">
          <div class="subscribe-icon"><i class="fa fa-book"></i></div>
          <h4 class="subscribe-title2"><a href="">FORMADORES</a></h4>
          <p class="subscribe-description">Nuestros profesores y personal administrativo, encuentra en Mano Amiga un 
            lugar sano dónde desarrollarse y formar parte activa de un cambio positivo en la comunidad. Cuentan con
             un orgullo y sentido de pertenencia a un ambiente laboral que se vuelve una familia que trasciende sus
              paredes. También encuentran en Mano Amiga un empleo con retribución adecuada que busca seguirlos 
              preparando y formando cada vez mejor para que desarrollen todas sus capacidades y seguir cumpliendo 
              su vocación. 
          </div>
          <div class="col-md-6 subscribe-item">
          <div class="subscribe-icon"><i class="fa fa-institution"></i></div>
          <h4 class="subscribe-title2"><a href="">REGNUM CHRISTI</a></h4>
          <p class="subscribe-description">Al ser parte de una red mucho mas grande de colegios e instituciones de educación,
             los miembros del Regnum Christi encuentran en Mano Amiga un apoyo, un brazo derecho de educación para
              aquellos que tienen menos oportunidades y un camino de formación en la conciencia social en todos sus 
              miembros y colaboradores.  
          </div>
        </div>

        

      </div>
    </div>
  </section>

  <!--==========================
  Porfolio Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Portfolio</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Portfolio 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Portfolio 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Portfolio 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Portfolio 4</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Portfolio 5</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Portfolio 6</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Portfolio 7</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Portfolio 8</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-1.jpg" alt=""></div>
            <h4>Saul Goodman</h4>
            <span>Lawless Inc</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--==========================
  Team Section
  ============================-->
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Mano Amiga Lerma</strong>. Todos Los Derechos Reservados
          </div><br>
          <div class="socialicon">
            <ul class="list-inline list-social-icons mb-0">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/morphext/morphext.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/stickyjs/sticky.js')}}"></script>
  <script src="{{asset('lib/easing/easing.js')}}"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="{{asset('js/custom.js')}}"></script>

  <script src="{{asset('contactform/contactform.js')}}"></script>


</body>

</html>
