<?php get_header(); ?>    
    <div class="container">
      <div class="row">
        <!-- Container Main -->
        <section class="main col-md-8 col-12">
          <div class="row posts">

            <!-- Si hay articulos, se ejecuta el codigo de while. Mientras haya articulos iremos cargando otros articulos -->
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="col-12 post">
              <div class="contenedor">
                <div class="thumb">
                <!-- Con esta linea de codigo agregamos en el href el ENLACE para que se dirija al articulo correspondiente -->
                  <!-- Con esta linea agregas la imagen y pónes un condicional para que tome la Imagen prestablecida del articulo -->
                  <?php if (has_post_thumbnail()) {
                        the_post_thumbnail ( 'homepage-thumb' );}?>
                </div>
                <div class="info">
                  <h2 class="titulo">
                  <?php the_title(); ?>
                  </h2>
                  <p class="fecha"><?php echo get_the_date(); ?></p>
                  <div class="categorias">
                    <?php the_category(); ?>
                  </div>
                  <div class="texto"><?php echo the_content(); ?></div>    
                </div>
              </div>
            </article>

            <div class="col-12">
              <div class="comentarios">
              <?php comments_template(); ?></div>
                  </div>

            <?php endwhile; else : ?>

                <article class="col-md-6 post">
              <div class="contenedor">
                <div class="info">
                  <h2 class="titulo">El post que buscas no existe</h2>
                  <div class="extracto"><?php echo the_excerpt(); ?><p>Revisa que la URL sea correcta</p></div>    
                </div>
              </div>
            </article>
            <?php endif; ?>
          </div>
        </section>
        <?php get_sidebar(); ?>  
      </div>
    </div>
<?php get_footer(); ?>  