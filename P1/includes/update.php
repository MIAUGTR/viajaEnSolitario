<?php

/**
 * @title: update.php
 * @description: modifica en la BBDD el cliente  que coincide con el id pasado
 * @author: Marius Mladinovici Danaila <al315550@uji.es>
 * @license CC-BY-NC-SA
 */

include("./gestionBD.php");

if( count($_REQUEST) < 6){
    $data["error"] = "No has rellenado el formulario correctamente";
    return;
}

$table="A_cliente";

try {

    $values = array($_REQUEST['userName'], $_REQUEST['lastName'], $_REQUEST['email'], $_REQUEST['dni'], $_REQUEST['passwd'], $_REQUEST['fotoFile'], $_REQUEST['clientId']);
    update($pdo, $table, $values);

    echo "Éxito al modificar";

}
catch (PDOException $e) {
    $e->getMessage();
}

?>