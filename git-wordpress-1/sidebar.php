<!-- Aside -->
<aside class="sidebar col-md-4">
    <div class="widget redes-sociales1">
    <div class="titulo-seccion">
        <h3>Siguenos</h3>
        <div class="redes-sociales2">
        <a
            class="facebook"
            href="https://www.facebook.com/LegendofZelda/"
            ><i class="fa-brands fa-facebook"></i
            ><span class="seguidores">130k</span>
        </a>
        <a class="youtube" href="https://www.youtube.com/c/nintendo"
            ><i class="fa-brands fa-youtube"></i
            ><span class="seguidores">6k</span>
        </a>
        <a
            class="instagram"
            href="https://www.instagram.com/zeldanintendo"
            ><i class="fa-brands fa-instagram"></i
            ><span class="seguidores">80k</span>
        </a>
        </div>
    </div>
    </div>
    <div class="widget boletin">
    <div class="titulo-seccion">
        <h3>Suscribete</h3>
        <form class="formulario" action="">
        <label for="email">Suscribete a nuestro boletin</label>
        <input
            type="email"
            id="email"
            placeholder="Correo electronico"
            required
        />
        <input type="submit" value="Enviar" />
        </form>
    </div>
    </div>
    <div class="widget ad2">
    <?php if (!function_exists('dynamic_sidebar') OR !dynamic_sidebar('Sidebar')) : endif; ?>
    </div>

</aside>