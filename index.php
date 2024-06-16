<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Difraxion - Contacto</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/@tabler/icons-webfont/dist/tabler-icons.min.css" />
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link href="css/EstilosMaestros.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection" />


</head>

<body>


  <div class="logo_flotante">
    <img src="img/dfx_bco.webp" class="" alt="Difraxion Logo">
  </div>
  <div style="position: fixed; right: 0; top: 0;">
    <img src="/svg/circulo_3_4.svg" alt="">
  </div>
  <div style="position: fixed; left: 0; top: 50%; transform: translateY(-50%);">
    <img src="/svg/circulo_1_2.svg" alt="">
  </div>
  <div class="puntos_posicion1">
    <img src="svg/puntos.svg" alt="">
  </div>
  <div class="puntos_posicion2">
    <img src="svg/puntos.svg" alt="">
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="h1_custom">#SomosLa<span>Conexión</span>ATusIdeas</h1>
          <p class="descripcion  text-black-custom"></i>En <strong class="marca_texto_blanco">Difraxion</strong> tenemos
            más de
            <strong class="marca_texto_blanco">15 años de
              experiencia</strong> trabajando con empresas del sector público y privado, a los cuales les
            ofrecemos proyectos a la medida de sus necesidades.
          </p>
          <p class="descripcion  text-black-custom">Somos expertos en <strong class="texto_negritas">potencializar tus
              ideas y
              conectar con ellas a través de
              nuestras soluciones</strong> de comunicación interna.</p>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" class="filtro_degradado" alt="Unsplashed background img 2"></div>
  </div>


  <div class="section black">

    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4 class="white-text texto_negritas ">REGISTRO</h4>
        <!-- linea -->
        <hr class="linea_intermedia_abajo">
        <!-- formaulario -->
        <div class="form-wrapper_custom_form">

          <div class="video-container hide" id="video-container">
              
          </div>

          <form class="form_custom_form" id="form-contacto">

            <div class="form-group_custom_form">
              <label for="nombre" class="label_custom_form">Nombre <span class="required_custom_form">*</span></label>
              <input type="text" id="nombre" name="nombre" class="form-control_custom_form" placeholder="John" required>
            </div>
            <div class="form-group_custom_form">
              <label for="email" class="label_custom_form">Email <span class="required_custom_form">*</span></label>
              <input type="email" id="email" name="email" class="form-control_custom_form" placeholder="johndoe@email.com" required>
            </div>
            <div class="form-group_custom_form">
              <label for="telefono" class="label_custom_form">Teléfono <span class="required_custom_form">*</span></label>
              <input type="tel" id="telefono" name="telefono" class="form-control_custom_form" placeholder="1234567890" pattern="[0-9]{1,12}" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 12)" required>
            </div>
            <div class="form-group_custom_form">
              <label for="ciudad" class="label_custom_form">Ciudad <span class="required_custom_form">*</span></label>
              <input type="text" id="ciudad" name="ciudad" class="form-control_custom_form" placeholder="Ciudad" required>
            </div>
            <div class="g-recaptcha" data-sitekey="<?php echo $_ENV['RECAPTCHA_PUBLIC']; ?>"></div>
            <div class="form-group_custom_form form-group-fullwidth_custom_form">
              <button type="submit" class="btn_custom_form"><i class="ti ti-send"></i>ENVIAR</button>
            </div>
          </form>
        </div>

      </div>
    </div>

  </div>



  <div class="parallax-container valign-wrapper ">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="texto_negro texto_negritas">POTENCIALIZA</h4>
          <h5><mark class="marca_texto_negro">TU COMUNICACIÓN</mark><br><mark class="marca_texto_negro">INTERNA.</mark>
          </h5>
          <!-- contenedor de letras sube el texto para empalmar a h5 -->
          <div class="contenedor_letras">
            <h4 class="texto_borde_atras_tranparencia h4_sin_espacio">COMUNICACIÓN INTERNA</h4>
            <h4 class="texto_borde_atras_tranparencia h4_sin_espacio">COMUNICACIÓN INTERNA</h4>
            <h4 class="texto_borde_atras_tranparencia h4_sin_espacio">COMUNICACIÓN INTERNA</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax tranparencia_img"></div>
  </div>

  <div class="speakers">
    <div class="speaker">
      <img class="filtro_gris circulo_blanco" src="img/2.jpg" alt="David Enriquez">
      <p><strong class="texto_negritas">David Enriquez</strong><br>Director General Difraxion</p>
    </div>
    <div class="speaker">
      <img class="filtro_gris circulo_blanco" src="img/1.jpg" alt="Andrea Huerta">
      <p><strong class="texto_negritas">Andrea Huerta</strong><br>Gerente de proyectos</p>
    </div>
  </div>


  <footer class="footer_p">
    <div class="logo_footer">
      <img src="img/dfx_bco.webp" alt="Difraxion Logo" width="150">
    </div>
    <div class="copyright">
      <p>&copy; Difraxion is a registered licensed by Difraxion.</p>
    </div>
    <div class="social-media">
      <a href="#" class="btn btn-cuadro-redondeado btn-facebook"><i class="ti ti-brand-facebook"></i></a>
      <a href="#" class="btn btn-cuadro-redondeado btn-instagram"><i class="ti ti-brand-instagram"></i></a>
      <a href="#" class="btn btn-cuadro-redondeado btn-x"><i class="ti ti-brand-x"></i></a>
      <a href="#" class="btn btn-cuadro-redondeado btn-linkedin"><i class="ti ti-brand-linkedin"></i></a>
    </div>

  </footer>
  <div class="espacio_fondo">

  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>