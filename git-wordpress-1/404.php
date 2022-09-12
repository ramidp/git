<?php get_header(); ?>    
    <div class="container">
      <div class="row d-flex" style="justify-content: center">
        <!-- Container Main -->
        <section class="main col-6">
          <div class="row posts">
            <article class="col-12 post">
              <div class="contenedor">
                <div  class="info">
                  <h2 class="titulo">Error 404</h2>
                  <div class="extracto"><?php echo the_excerpt(); ?><p>La pagina que buscas no se encuentra, por favor verifica que la URL sea correcta</p>
                <br>
                <a href="<?php bloginfo('url');?>">Regresar a la pagina de Inicio</a></div>    
                </div>
              </div>
            </article>
          </div>
        </section>
      </div>
    </div>
<?php get_footer(); ?>  