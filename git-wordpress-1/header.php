<!DOCTYPE html>
<!-- Idioma en Español-->
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font de Google -->
    <link
      href="https://fonts.googleapis.com/css2?family=Limelight&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <!-- Archivos de Font Awesome-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Fontawesome/css/all.css" />

    <!-- Link de Archivo SASS creado por nosotros-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/tema1-wordpress.css" />


    <!-- Link de CSS Bootstrap 5-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!-- Es un codigo de php para que cuando este en HOME, muestre el titulo del BLOG arriba como nombre.
    Cuando este en la pagina SINGLE-->
    <title>
        <?php if(is_home()) {
            echo get_bloginfo('name');
        } else if (is_single()) {
            echo the_title();
        } else {
            echo get_bloginfo('name');
        } ?>
    </title>

 <!-- Comando de php para agregar el header de Wordpress -->

    <?php wp_head(); ?>
  </head>

  <body>
    <!-- Header-->
    <header>
      <div class="container">
        <div class="row">
          <div class="logo col-12 col-md-6">
            <!-- Ver bien el href para que vaya a inicio -->
            <a
              class=""
              style="text-decoration: none"
              href="http://localhost/wordpress/"
            >
              <!-- Logo de La pagina -->
              <img
                style="width: 70px"
                src="<?php bloginfo('template_url'); ?>/images/isologotipo.png"
                alt="Isologotipo Icon"
              />
            </a>
          </div>
          <!-- Redes Sociales -->
          <div class="redes-sociales col-6">
            <a class="facebook" href="https://www.facebook.com/LegendofZelda/"
              ><i class="fa-brands fa-facebook"></i
            ></a>
            <a class="youtube" href="https://www.youtube.com/c/nintendo"
              ><i class="fa-brands fa-youtube"></i
            ></a>
            <a class="instagram" href="https://www.instagram.com/zeldanintendo"
              ><i class="fa-brands fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
      <nav class="menu">
        <div class="container">
          <div class="row">

          <!-- TRATAR DE CREAR EL BOTON QUE ESCONDE EL MENU EN MOBILE -->


          <?php wp_nav_menu(array(
              'container' => false,
              'menu_class' => '',
              'items_wrap' => '<ul class="col-12" %3$s </ul>',
              'theme_location' => 'menu-top'
          )); ?>
        </div>
      </nav>
      <div class="ad1 container hidden">
        <div class="row">
          <div class="col">
          <?php if (!function_exists('dynamic_sidebar') OR !dynamic_sidebar('Header')) : endif; ?>
          </div>
        </div>
      </div>
    </header>