<?php

// Agrega el soporte para los thumbnails que son las imagenes destacadas
add_theme_support('post-thumbnails');

// Agregamos una propiedad y tamaño de imagen para el thumbnail de 745x372 y el true es que si no existe la imagen se va a recortar
add_image_size('homepage-thumb', 745, 372, true);


// Registramos el menu de navegacion con un arreglo y 2 menues que son los que tenemos, TOP y FOOTER

register_nav_menus(array(
    'menu-top' => 'Menu Principal',
    'menu-footer' => 'Menu Footer'
) );


// Registramos un sidebar para el blog creandolo con la clase widget para que tome la clase de CSS

register_sidebar (array(
    'name' => 'Header',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

//Importante poner en el before y en el after las etiquetas para darle CLASE al widget.

register_sidebar (array(
    'name' => 'Sidebar',
    'before_widget' => '<aside><div class="widget"><div class="titulo-seccion">',
    'after_widget' => '</div></div></aside>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

register_sidebar (array(
    'name' => 'Footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

?>

