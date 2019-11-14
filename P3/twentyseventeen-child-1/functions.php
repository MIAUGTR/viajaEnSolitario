<?php


/**
 * Copiado del boletín de prácticas para probar los ganchos
 *
 * Este fichero reemplaza la palabra " " minúscula por la misma
 * palabra en mayúscula.
 */

add_filter("the_content", "mpf_Fix_Text_Spacing");
function mpf_Fix_Test_Spacing($the_Post){
    $the_New_Post = str_replace("piruleta", " PIRULETA ", $the_Post);
    return $the_New_Post;
}

?>