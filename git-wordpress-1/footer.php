<footer>
      <div class="ad hidden container">
        <div class="row">
          <div class="col-md-12">
          <?php if (!function_exists('dynamic_sidebar') OR !dynamic_sidebar('Footer')) : endif; ?>
          </div>
        </div>
      </div>
      <nav class="menu">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            <?php wp_nav_menu(array(
              'container' => false,
              'menu_class' => '',
              'items_wrap' => '<ul class="col-12" %3$s </ul>',
              'theme_location' => 'menu-footer'
            )); ?>
            </div>
          </div>
        </div>
      </nav>
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p>Sitio creado por <strong>Ramiro De Palo</strong> (HTML, CSS, BOOTSTRAP 5, WORDPRESS)</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Comando de php para agregar el footer de Wordpress -->
    <?php wp_footer(); ?>

    <!-- Scripts Bootstrap 5-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>