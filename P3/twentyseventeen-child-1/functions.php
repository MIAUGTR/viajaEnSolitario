<?php


/**
 * Copiado del boletín de prácticas para probar los ganchos
 *
 * Este fichero reemplaza la palabra "piruleta" minúscula por la misma
 * palabra en mayúscula.
 */


function fromMinToMayus($content) {
    if( is_singular() && is_main_query() ) {
        $post= str_replace('piruleta', 'PIRULETA', $content);
    }
    return $post;
}
add_filter('the_content', 'fromMinToMayus');

?>