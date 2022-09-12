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
                <div class="info">
                  <h2 class="titulo">
                  <?php the_title(); ?>
                  </h2>
                  <p class="fecha"><?php echo get_the_date(); ?></p>
                  <div class="texto"><?php echo the_content(); ?></div>    
                </div>
              </div>
            </article>

 <!-- Si quisiera Comentarios, aqui iria el div/section que tiene single.php, donde se encuentran los comentarios -->


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