<?php

/**
 * @title: borrar.php
 * @description: elimina de la BBDD el cliente  que coincide con el id pasado
 * @author: Marius Mladinovici Danaila <al315550@uji.es>
 * @license CC-BY-NC-SA
 */

include("./gestionBD.php");

try {

    $table="A_cliente";

    $client_id = $_REQUEST['client_id'];
    borrar($pdo, $table, $client_id); // Llama a la función de gestionBD.php

    echo "Éxito al borrar.";

}
catch (PDOException $e) {
    echo $e->getMessage();
}

?>